@extends('admin.layouts.master')
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
@section('content')
<h1 class='page-header'> 
    Промяна на въпрос
</h1>

<form action="{{URL::route('postAdminEditQuestions',$question->id)}}" method='post'>
    {{Form::token()}}
    <div class='form-group '>
        <label for='question'>Промяна на въпрос: {{{$question->text}}}</label>
        <input id='question' class='form-control' type='text' name='question' value='{{{$question->text}}}'>
    </div>
<!--    <div class='form-group '>
        <label for='question'>Тип:</label>
        <select  class='form-control' name='type'>
            <option value="0" {{($question->type==0)?'selected':''}}>Обикновен</option>
            <option value="1" {{($question->type==1)?'selected':''}}>Бонус</option>
        </select>    
    </div>-->
    <hr>

    <?php $j = ($question->type == 0) ? 3 : 4; ?>
    @for($i = 0; $i < $j; $i++)
    <div class='form-group '>
        <label for='question'>Отговор {{$i+1}}: </label>
        <input id='question' class='form-control' type='text' name='answers[{{$question->answers[$i]->id}}]' value='{{$question->answers[$i]->text}}'>
        <input type='radio' value="{{$question->answers[$i]->id}}" name='correct_answer' {{$question->correct_answer_id == $question->answers[$i]->id ? 'checked':''}} > Верен!
    </div>
    @endfor
    <button class='btn btn-default'>Запиши</button>

</form>

@stop