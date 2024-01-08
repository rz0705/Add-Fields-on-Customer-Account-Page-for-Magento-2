<?php
namespace Custom\Customer\Setup;

use Magento\Customer\Model\Customer;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\InstallDataInterface;

class InstallData implements \Magento\Framework\Setup\InstallDataInterface
{
    private $eavSetupFactory;
    
    private $eavConfig;
    
    private $attributeResource;
     
    public function __construct(
        \Magento\Eav\Setup\EavSetupFactory $eavSetupFactory,
        \Magento\Eav\Model\Config $eavConfig,
        \Magento\Customer\Model\ResourceModel\Attribute $attributeResource
    ) {
        $this->eavSetupFactory = $eavSetupFactory;
        $this->eavConfig = $eavConfig;
        $this->attributeResource = $attributeResource;
    }
    
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);

        $eavSetup->removeAttribute(Customer::ENTITY, "business_name");
        $eavSetup->removeAttribute(Customer::ENTITY, "business_email");
        $eavSetup->removeAttribute(Customer::ENTITY, "business_address");
        $eavSetup->removeAttribute(Customer::ENTITY, "city");
        $eavSetup->removeAttribute(Customer::ENTITY, "province_state");
        $eavSetup->removeAttribute(Customer::ENTITY, "postal_zip_code");
        $eavSetup->removeAttribute(Customer::ENTITY, "business_phone_number");
        $eavSetup->removeAttribute(Customer::ENTITY, "website");
        $eavSetup->removeAttribute(Customer::ENTITY, "interest");
        $eavSetup->removeAttribute(Customer::ENTITY, "business_type");
        $eavSetup->removeAttribute(Customer::ENTITY, "hear_about_us");

        $attributeSetId = $eavSetup->getDefaultAttributeSetId(Customer::ENTITY);
        $attributeGroupId = $eavSetup->getDefaultAttributeGroupId(Customer::ENTITY);

        // Add "business_name" attribute
        $eavSetup->addAttribute(Customer::ENTITY, 
        'business_name', [
                'type' => 'varchar',
                'label' => 'Business Name',
                'input' => 'text',
                'required' => true,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 902,
                'position' => 902,
                'system' => 0,
                'visible_in_grid' => true,
                'visible_in_listing' => true,
                'unique' => false,
            ]);

        // Add "business_email" attribute
        $eavSetup->addAttribute(Customer::ENTITY, 
        'business_email', [
                'type' => 'varchar',
                'label' => 'Business Email',
                'input' => 'text',
                'required' => true,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 903, // Adjust the sort order as needed
                'position' => 903, // Adjust the position as needed
                'system' => 0,
                'visible_in_grid' => true,
                'visible_in_listing' => true,
                'unique' => false,
            ]);

        // Add "business_address" attribute
        $eavSetup->addAttribute(Customer::ENTITY, 
        'business_address', [
                'type' => 'varchar',
                'label' => 'Business Address',
                'input' => 'text',
                'required' => true,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 904, // Adjust the sort order as needed
                'position' => 904, // Adjust the position as needed
                'system' => 0,
                'visible_in_grid' => true,
                'visible_in_listing' => true,
                'unique' => false,
            ]);

        // Add "business_city" attribute
        $eavSetup->addAttribute(Customer::ENTITY, 
        'business_city', [
                'type' => 'varchar',
                'label' => 'City',
                'input' => 'text',
                'required' => true,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 905, // Adjust the sort order as needed
                'position' => 905, // Adjust the position as needed
                'system' => 0,
                'visible_in_grid' => true,
                'visible_in_listing' => true,
                'unique' => false,
            ]);

        // Add "province_state" attribute
        $eavSetup->addAttribute(Customer::ENTITY, 
        'province_state', [
                'type' => 'varchar',
                'label' => 'Provience/State',
                'input' => 'text',
                'required' => true,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 906, // Adjust the sort order as needed
                'position' => 906, // Adjust the position as needed
                'system' => 0,
                'visible_in_grid' => true,
                'visible_in_listing' => true,
                'unique' => false,
            ]);

        // Add "postal_zip_code" attribute
        $eavSetup->addAttribute(Customer::ENTITY, 
        'postal_zip_code', [
                'type' => 'varchar',
                'label' => 'Postal/Zip Code',
                'input' => 'text',
                'required' => true,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 907, // Adjust the sort order as needed
                'position' => 907, // Adjust the position as needed
                'system' => 0,
                'visible_in_grid' => true,
                'visible_in_listing' => true,
                'unique' => false,
            ]);

        // Add "business_phone_number" attribute
        $eavSetup->addAttribute(Customer::ENTITY, 
        'business_phone_number', [
                'type' => 'varchar',
                'label' => 'Phone Number',
                'input' => 'text',
                'required' => true,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 908, // Adjust the sort order as needed
                'position' => 908, // Adjust the position as needed
                'system' => 0,
                'visible_in_grid' => true,
                'visible_in_listing' => true,
                'unique' => false,
            ]);

        // Add "website" attribute
        $eavSetup->addAttribute(Customer::ENTITY, 
        'website', [
                'type' => 'varchar',
                'label' => 'Website',
                'input' => 'text',
                'required' => false,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 909, // Adjust the sort order as needed
                'position' => 909, // Adjust the position as needed
                'system' => 0,
                'visible_in_grid' => true,
                'visible_in_listing' => true,
                'unique' => false,
            ]);

        // Add "business_type" attribute
        $eavSetup->addAttribute(Customer::ENTITY, 
        'business_type', [
                'type' => 'varchar',
                'label' => 'What type of business do you have?',
                'input' => 'text',
                'required' => true,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 910, // Adjust the sort order as needed
                'position' => 910, // Adjust the position as needed
                'system' => 0,
                'visible_in_grid' => true,
                'visible_in_listing' => true,
                'unique' => false,
            ]);

        // Add "hear_about_us" attribute
        $eavSetup->addAttribute(Customer::ENTITY, 
        'hear_about_us', [
                'type' => 'varchar',
                'label' => 'How did you hear about us?',
                'input' => 'text',
                'required' => false,
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 912, // Adjust the sort order as needed
                'position' => 912, // Adjust the position as needed
                'system' => 0,
                'visible_in_grid' => true,
                'visible_in_listing' => true,
                'unique' => false,
            ]);

            // Set attribute sets and groups for "business_name"
            $attribute = $this->eavConfig->getAttribute(Customer::ENTITY, 'business_name');
            $attribute->setAttributeSetId($attributeSetId);
            $attribute->setAttributeGroupId($attributeGroupId);
            $attribute->setData('used_in_forms', [
                'adminhtml_customer',
                'customer_account_create',
                'customer_account_edit'
            ]);
    
            $this->attributeResource->save($attribute);

            // Set attribute sets and groups for "business_email"
            $attribute = $this->eavConfig->getAttribute(Customer::ENTITY, 'business_email');
            $attribute->setAttributeSetId($attributeSetId);
            $attribute->setAttributeGroupId($attributeGroupId);
            $attribute->setData('used_in_forms', [
                'adminhtml_customer',
                'customer_account_create',
                'customer_account_edit'
            ]);
            $this->attributeResource->save($attribute);

            // Set attribute sets and groups for "business_address"
            $attribute = $this->eavConfig->getAttribute(Customer::ENTITY, 'business_address');
            $attribute->setAttributeSetId($attributeSetId);
            $attribute->setAttributeGroupId($attributeGroupId);
            $attribute->setData('used_in_forms', [
                'adminhtml_customer',
                'customer_account_create',
                'customer_account_edit'
            ]);
            $this->attributeResource->save($attribute);

            // Set attribute sets and groups for "business_city"
            $attribute = $this->eavConfig->getAttribute(Customer::ENTITY, 'business_city');
            $attribute->setAttributeSetId($attributeSetId);
            $attribute->setAttributeGroupId($attributeGroupId);
            $attribute->setData('used_in_forms', [
                'adminhtml_customer',
                'customer_account_create',
                'customer_account_edit'
            ]);
            $this->attributeResource->save($attribute);

            // Set attribute sets and groups for "province_state"
            $attribute = $this->eavConfig->getAttribute(Customer::ENTITY, 'province_state');
            $attribute->setAttributeSetId($attributeSetId);
            $attribute->setAttributeGroupId($attributeGroupId);
            $attribute->setData('used_in_forms', [
                'adminhtml_customer',
                'customer_account_create',
                'customer_account_edit'
            ]);
            $this->attributeResource->save($attribute);

            // Set attribute sets and groups for "postal_zip_code"
            $attribute = $this->eavConfig->getAttribute(Customer::ENTITY, 'postal_zip_code');
            $attribute->setAttributeSetId($attributeSetId);
            $attribute->setAttributeGroupId($attributeGroupId);
            $attribute->setData('used_in_forms', [
                'adminhtml_customer',
                'customer_account_create',
                'customer_account_edit'
            ]);
            $this->attributeResource->save($attribute);

            // Set attribute sets and groups for "business_phone_number"
            $attribute = $this->eavConfig->getAttribute(Customer::ENTITY, 'business_phone_number');
            $attribute->setAttributeSetId($attributeSetId);
            $attribute->setAttributeGroupId($attributeGroupId);
            $attribute->setData('used_in_forms', [
                'adminhtml_customer',
                'customer_account_create',
                'customer_account_edit'
            ]);
            $this->attributeResource->save($attribute);

            // Set attribute sets and groups for "website"
            $attribute = $this->eavConfig->getAttribute(Customer::ENTITY, 'website');
            $attribute->setAttributeSetId($attributeSetId);
            $attribute->setAttributeGroupId($attributeGroupId);
            $attribute->setData('used_in_forms', [
                'adminhtml_customer',
                'customer_account_create',
                'customer_account_edit'
            ]);
            $this->attributeResource->save($attribute);

            // Set attribute sets and groups for "business_type"
            $attribute = $this->eavConfig->getAttribute(Customer::ENTITY, 'business_type');
            $attribute->setAttributeSetId($attributeSetId);
            $attribute->setAttributeGroupId($attributeGroupId);
            $attribute->setData('used_in_forms', [
                'adminhtml_customer',
                'customer_account_create',
                'customer_account_edit'
            ]);
            $this->attributeResource->save($attribute);

            // // Set attribute sets and groups for "business_about"
            // $attribute = $this->eavConfig->getAttribute(Customer::ENTITY, 'business_about');
            // $attribute->setAttributeSetId($attributeSetId);
            // $attribute->setAttributeGroupId($attributeGroupId);
            // $attribute->setData('used_in_forms', [
            //     'adminhtml_customer',
            //     'customer_account_create',
            //     'customer_account_edit'
            // ]);
            // $this->attributeResource->save($attribute);

            // Set attribute sets and groups for "hear_about_us"
            $attribute = $this->eavConfig->getAttribute(Customer::ENTITY, 'hear_about_us');
            $attribute->setAttributeSetId($attributeSetId);
            $attribute->setAttributeGroupId($attributeGroupId);
            $attribute->setData('used_in_forms', [
                'adminhtml_customer',
                'customer_account_create',
                'customer_account_edit'
            ]);
            $this->attributeResource->save($attribute);
    }
}
?>