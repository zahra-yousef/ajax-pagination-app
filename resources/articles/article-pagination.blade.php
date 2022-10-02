<table class="table table-striped table-dark table-bordered">
    <tr>
      <th>Sr No.</th>
      <th>Title</th>
  
      <th>Body</th>
  
      <th>Date</th>
    </tr>
    @foreach($articles as $article)
    <tr>
      <td>{{$article->id}}</td>
      <td>{{$article->title}}</td>
  
      <td>{{$article->body}}</td>
      <td>{{$article->created_at}}</td>
    </tr>
    @endforeach
  </table>
  <div id="pagination">
    {{ $articles->links() }}
  </div>