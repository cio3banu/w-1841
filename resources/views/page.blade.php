<p>Pgaina page</p>
@foreach ($articles as $article)
<li>{{$article->title}}
<li>{{$article->description}}
<li>{{$article->content}}
<li>{{$article->author}}
@endforeach