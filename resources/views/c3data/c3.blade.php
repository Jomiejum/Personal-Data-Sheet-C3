@extends('welcome')

<html>
<h1>VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC/NON-GOVERNMENT/PEOPLE/VOLUNTARY ORGANIZATION</h1><br>
<div class="VI">
    <table class="table table-bordered">
        <tr>
            <th><b>{{Form::label('form1', 'NAME & ADDRESS OF ORGANIZATION')}}</b></th>
            <th colspan='2'><b>{{Form::label('form2', 'INCLUSIVE DATES')}}</b></th>
            <th><b>{{Form::label('form3', 'NUMBER OF HOURS')}}</b></th>
            <th><b>{{Form::label('form2','POSITION / NATURE OF WORK')}}</b></th>
        </tr>
        <tr>
            <th></th>
            <th>{{Form::label('form21', 'From')}}</th>
            <th>{{Form::label('form22', 'To')}}</th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <th>{{Form::text('orgnameAddress1')}}</th>
            <th>{{Form::date('orgdateFrom1')}}</th>
            <th>{{Form::date('orgdateTo1')}}</th>
            <th>{{Form::number('orgnumHours1')}}</th>
            <th>{{Form::text('orgnameAddress1')}}</th>
        </tr>
        <tr>
            <th>{{Form::text('orgnameAddress2')}}</th>
            <th>{{Form::date('orgdateFrom2')}}</th>
            <th>{{Form::date('orgdateTo2')}}</th>
            <th>{{Form::number('orgnumHours2')}}</th>
            <th>{{Form::text('orgnameAddress2')}}</th>
        </tr>
        <tr>
            <th>{{Form::text('orgnameAddress3')}}</th>
            <th>{{Form::date('orgdateFrom3')}}</th>
            <th>{{Form::date('orgdateTo3')}}</th>
            <th>{{Form::number('orgnumHours3')}}</th>
            <th>{{Form::text('orgnameAddress3')}}</th>
        </tr>

    </table>

</div>





</html>
