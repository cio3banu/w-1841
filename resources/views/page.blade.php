<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="{{URL::asset('css/app.css')}}" class="href">
</head>
<body>
    
</body>
</html>
<p>Pgaina page</p>
@foreach ($articles as $article)
<li>{{$article->title}}
<li>{{$article->description}}
<li>{{$article->content}}
<li>{{$article->author}}
@endforeach