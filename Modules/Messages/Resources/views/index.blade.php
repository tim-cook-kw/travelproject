@extends('apps.layout')

@section('content')
<!-- Chatting Content -->
<br>
<div class="col-md-8">
    <div class="panel panel-info">
        <div class="panel-heading">
            RECENT CHAT HISTORY
        </div>
        <div class="panel-body">
            <!-- <ul class="media-list">

                <li class="media">

                    <div class="media-body">

                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object img-circle " src="assets/img/user.png" />
                            </a>
                            <div class="media-body">
                                Donec sit amet ligula enim. Duis vel condimentum massa.

                                Donec sit amet ligula enim. Duis vel condimentum massa.Donec sit amet ligula
                                enim.
                                Duis vel condimentum massa.
                                Donec sit amet ligula enim. Duis vel condimentum massa.
                                <br />
                                <small class="text-muted">Alex Deo | 23rd June at 5:00pm</small>
                                <hr />
                            </div>
                        </div>

                    </div>
                </li>

            </ul> -->
            @foreach($pesan as $post)
            <tr>
                <td>{{ $post->id_pesan }}</td>
                <td>{{ $post->id_customer }}</td>
                <td>{{ $post->pesan }}</td>
                <td>{{ $post->updated_at }}</td>
                <td>{{ $post->created_at }}</td>
            </tr>
            @endforeach
        </div>
        <div class="panel-footer">
            <form action="{{ route('pesan.send') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="pesan">
                    <br>
                    <span class="input-group-btn">
                        <button class="btn btn-primary">SEND</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Chatting List -->
<br>
<div class="col-md-4">
    <div class="panel panel-primary">
        <div class="panel-heading">
            ONLINE USERS
        </div>
        <div class="panel-body">
            <ul class="media-list">

                <li class="media">

                    <div class="media-body">

                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object img-circle" style="max-height:40px;" src="assets/img/user.png" />
                            </a>
                            <div class="media-body">
                                <h5>Alex Deo | User </h5>

                                <small class="text-muted">Active From 3 hours</small>
                            </div>
                        </div>

                    </div>
                </li>
            </ul>
        </div>
    </div>

</div>
@stop