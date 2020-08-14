@component('mail::message')
# A heading 

Lorem ipsum dolor sit amet, consectetur adipiscing elit

- A list 
- goes
- here    

Lorem ipsum dolor sit amet, consectetur adipiscing elit

@component('mail::button' , ['url' => 'http://laracast.com'])

Visit laracast

@endcomponent

@endcomponent


<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta 
        name="viewport" 
        content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0"
    >
    <meta 
        http-equiv="X-UA-Compatible" 
        content="ie=edge"
    >


    <title>Document</title>
</head>
<body>
    <h1> It works Again </h1>

    <p>It sounds like you want to hear more about {{ $topic }}.</p>
</body>
</html>-->