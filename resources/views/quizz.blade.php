<form class="quiz-question" method="post" action="{{route('result')}}">
    @csrf
    @foreach($forms as $form)
        <ul class="multiple-choice-list" >

            <div class="quiz-explanation">რამდენია {{$form->question}}
            </div>

            <li><label for="answer"><input type="radio" name="{{$form->id}}" value="{{$form->answera}}">{{$form->answera}}</label> <i class="fa fa-check fa-lg answer"></i></li>
            <li><label for="answer"><input type="radio" name="{{$form->id}}" value="{{$form->answerb}}">{{$form->answerb}}</label></li>
            <li><label for="answer"><input type="radio" name="{{$form->id}}" value="{{$form->answerc}}">{{$form->answerc}}</label></li>
            <li><label for="answer"><input type="radio" name="{{$form->id}}" value="{{$form->answerd}}">{{$form->answerd}}</label></li>
        </ul>
    @endforeach


    <button type="submit" class="btnCheckAnswer" data-answer="1" value="send">გაგზავნა</button>
</form>


<script></script>
