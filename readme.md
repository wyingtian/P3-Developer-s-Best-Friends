# Developer's Best Friends

## Live URL
<http://p3.yingtian.me>

## Youtube Demo 
<https://youtu.be/bGUZ0cvMBkQ/>

## Description
This is a web application that contains three tools.
 
1. generate lorem text
2. generate random user 
3. generate a xkcd password.

## Usage
click the tool you want and follow the instruction

## Details for teaching team
+ No login required.
+ For the server side validation I create rules in the request class, instead of define in the controller


## Outside code and references
* Bootstrap: <http://getbootstrap.com/>
* Word list: <https://github.com/first20hours/google-10000-english>
* Header template is from <http://tutorialzine.com/2015/02/freebie-7-responsive-header-templates/>
* I moved all my routes into:
	`Route::group(['middleware' => ['web']], function (){}`
so that `$error` can be displayed at my view.
* use of `Illuminate\Html bindShared()` in HtmlServiceProvider.php needs to be changed to `singleton() `
<https://laracasts.com/discuss/channels/laravel/call-to-undefined-method-illuminatefoundationapplicationbindshared>
