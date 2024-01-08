# Add Fields on Customer Account Page for Magento-2

## Using Composer:
```bash
composer require webmob/customer
```

## Installation via app/code:
Unzip the module and upload the content of the module inside the code/Custom folder. This will not overwrite the existing Magento folder or files, only the new contents will be added.

After the successful upload of the package, run the below commands on the Magento 2 root directory.

Step-1: Run the below command to enable the module

```bash
sudo php bin/magento module:enable Custom_Customer
```

Step-2: Run the below command to check the module status

```bash
sudo php bin/magento module:status Custom_Customer
```

Step-3: Apply database schema and data updates

```bash
sudo php bin/magento setup:upgrade
```

Step-4: Compile Dependency Injection (DI) configuration for optimization

```bash
sudo php bin/magento setup:di:compile
```

Step-5: Deploy static view files (force deploy, overwriting existing files)

```bash
sudo php bin/magento setup:static-content:deploy -f
```

Step-6: Clear Magento cache

```bash
sudo php bin/magento cache:clean
```
Step-7: Flush Magento cache (remove all items from the cache)


```bash
sudo php bin/magento c:f
```
