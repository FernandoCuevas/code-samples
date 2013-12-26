# CodeIgniter

This is a sample CodeIgniter app made for getting yourself running in no time. It is already integrated with the Ooyala PHP SDK (/application/third_party/php-v2-sdk) and CodeIgniter framework, so there is no need to add anything external.

## What is CodeIgniter
CodeIgniter is a framework in PHP designed to have as low overhead as possible. It follows an MVC pattern, where you pass information to the view in the following way:
$this->view->load("name_of_the_view", $data)

The relevant files are structured in the following way:
/application
    /assets
    /config
    /controllers
    /views
    /libraries
    /models
    /third_party (Here you have extra stuff, e.g. Ooyala SDK)

## How to get it running
1. You need to have a server running that can interpret PHP, like Apache or Nginx.
2. Clone this repository in your server
3. The path for the example would be "your_base_path/code-samples/api-examples/CodeIgniter_app/index.php". So, if you are running this from your localhost, you will have a URL like "localhost/code-samples/api-examples/CodeIgniter_app/index.php"
4. In order to get more than the welcome page, you need to modify the values in application/config/ooyala_config.php. There you will be asked for you API key, secret, embed code and some other stuff. For more information about this you can check [our documentation](http://support.ooyala.com/developers/documentation/concepts/api_keys.html)

For more information about CodeIgniter installation you can check [their webpage](http://ellislab.com/codeigniter/user-guide/installation/)

## Structure
CodeIgniter urls follow a structure like
 ```
http://example.com/index.php/[controller-class]/[controller-method]/[arguments]
 ```
 Currently, this example has the following routes

| Route                      | Info                                                                     |
|----------------------------|--------------------------------------------------------------------------|
| Atlas/cross_resume         | Cross device resume                                                      |
| Atlas/simple               | Barebones player                                                         |
| Atlas/message_bus          | Simple message bus handling                                              |
| Atlas/message_bus_advanced | Milestones with message bus                                              |
| Atlas/token                | An example with playerToken                                              |
| Atlas/google_ima           | Player with Google IMA enabled                                           |
| Atlas/multi_feature        | An example that has all of the above                                     |
| WebExample/                | A simple client page that shows a video with trending and related videos |
| WebExample/mobile          | The same as WebExample root but with page resizing                       |