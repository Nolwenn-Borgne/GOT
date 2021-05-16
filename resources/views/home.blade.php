@include('layout.header')

<ul class="characters-list">
@foreach($characters as $character)
        <li class="character-card">
            <a href="<?=route('character-item', ['id' => $character->id]);?>">

                <div class="avatar" style="background: #{{$character->houses[0]->colour}};">
                    <img src="http://0.0.0.0:8080/assets/img/{{$character->image}}" alt="{{$character->first_name}}">
                </div>
                <div class="name">
                {{$character->first_name}} {{$character->last_name}}
                </div>
            </a>
        </li>
        @endforeach
        </ul>

@include('layout.footer')
