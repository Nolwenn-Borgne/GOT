@include('layout.header')

<section class="character-page">
       <div class="col-8">
            <h2>{{$character->first_name}} {{$character->last_name}}</h2>
            <div class="bio">
                <h3>Biographie</h3>
                <p>{{$character->biography}}</p>
            </div>
        </div>
        <div class="col-4">
            <div class="avatar" style="background: #e3e3e3;">
                <img src="http://0.0.0.0:8080/assets/img/{{$character->image}}" alt="{{$character->first_name}}">
            </div>
            <div class="infos">
                <h3>Maisons</h3>
                <div class="houses">
                    <ul>
                        @foreach($character->houses as $house)
                                                    <li class="house-logo" style="background: #{{$house->colour}};">
                                <a href="<?=route('house-item', ['id' => $house->id]);?>">
                                    <img src="http://0.0.0.0:8080/assets/img/houses/{{$house->image}}" alt="{{$house->name}}">
                                </a>
                            </li>
                        @endforeach

                                            </ul>
                </div>
                <ul class="meta">
                    <li><span>Rang : </span> {{$character->title->name}}</li>
                    <li><span>Mère : </span>
                    @if(isset($character->mother))
                        {{$character->mother->first_name}} {{$character->mother->last_name}}
                    @else
                        Non renseigné
                    @endif
                                            </li>
                    <li><span>Père : </span>
                    @if(isset($character->father))
                    {{$character->father->first_name}} {{$character->father->last_name}}
                    @else
                        Non renseigné
                    @endif
                                            </li>
                </ul>
            </div>
        </div>
   </section>

@include('layout.footer')
