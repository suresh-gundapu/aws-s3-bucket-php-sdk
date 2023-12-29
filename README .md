
# Upload File and Download to AWS S3 Bucket Using PHP


Amazon S3 (Simple Storage Service) is a storage service provided by Amazon Web Services (AWS). Amazon S3 is highly scalable data storage to store and retrieve data over the internet. When a web application dealt with a huge number of files, a separate storage service can be used to reduce the bandwidth usage of the application server. Amazon S3 is the best option to store files separately from the application server and helps to reduce the file load time.

If web applications allow users to upload files in PHP, generally the files are stored on the local server. You can upload and store files to AWS S3 instead of the local server. The process is very simple to upload, store, and retrieve files from Amazon S3 bucket with PHP SDK. In this tutorial, we will show you how to upload files to Amazon S3 bucket using PHP.
Amazon S3 Account
Before getting started, you need to create an AWS account and login to the AWS Management Console.

Search for the S3 service and go to the S3 Management Console.
Create S3 Bucket:
In AWS S3, the buckets are like a container that holds files in data storage. You need to create a bucket to upload files in Amazon S3.

Get Access Key ID and Secret Access Key from AWS Account:

Go to the IAM Console.
From the left navigation menu, select Users under the Access management section.
Create a user with AmazonS3FullAccess permission.
On success, the Access Key ID and Secret Access Key will be generated. Note these AWS credentials to use in the code later.
Install AWS SDK for PHP
We will use the AWS SDK library to upload files to AWS S3 bucket using PHP.

You can use Composer to install AWS SDK in the script folder. Run the following command on the terminal to install AWS PHP SDK with Composer.

composer require aws/aws-sdk-php
## Authors

- [@suresh-gundapu](https://www.github.com/suresh-gundapu)


## License

[MIT](https://choosealicense.com/licenses/mit/)



