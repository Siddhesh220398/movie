<div class="comments-area">
    <div class="list-comments">
        <h3 class="comments-title">
            {{\App\Model\MovieComments::where('movie_id',$movie->id)->count()}} Comments
        </h3>
        <ul class="comment-list">
            @forelse($movie->movieComments as $movieComment)
                <li class="comment">
                    <img class="avatar"
                         src="{{asset('frontend/assets/images/ava-01.jpg')}}"
                         alt="IMG">
                    <div class="content-comment">
                        <div class="author">
                  <span class="author-name">
                  {{$movieComment->user->name}}  [  {{\Carbon\Carbon::parse($movieComment->created_at)->format('d-M-Y')}}]
                  </span>


                        </div>
                        <div class="message">
                            <p>
                                {{$movieComment->comments}}
                                 </p>
                            <button onclick="ShowHideDiv({{$movieComment->id}},'show')" class="btn show_btn_{{$movieComment->id}}" title="Comment" ><i class="fa fa-comment"></i> </button>
                            <button onclick="ShowHideDiv({{$movieComment->id}},'hide')" class="btn hide_btn_{{$movieComment->id}}" title="Comment" style="display: none"><i class="fa fa-comment"></i> </button>

                            <div class="comment-message">
                                <form class="communicateForm_{{$movieComment->id}}">
                                    @method('POST')
                                    @csrf
                                    <div class="form-group show-comment_{{$movieComment->id}}" style="display: none">
                                        <input type="text" name="comment" id="comment_{{$movieComment->id}}"
                                               class="form-control">
                                        <input type="hidden" name="movie_id" value="{{$movie->id}}"
                                               class="form-control">
                                        <input type="hidden" name="comment_id" value="{{$movieComment->id}}"
                                               class="form-control">
                                        <button type="submit" class="comment-reply-link main-communicate-btn"
                                                data-id="{{$movieComment->id}}">
                                            Reply
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                    @if(count($movieComment->subComments) > 0)
                        @include('frontend.movie.sub-comment',['comments'=>$movieComment->subComments,'level'=>1])
                    @endif
                </li>
            @empty
            @endforelse
        </ul>
    </div>
</div>
