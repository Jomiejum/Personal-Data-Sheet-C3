@extends('welcome')


 <head>
    <title>PDS_C3</title>
 </head>


<html>
    <div class="main">
        <div class ="VI">
            <h1>VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC/NON-GOVERNMENT/PEOPLE/VOLUNTARY ORGANIZATION</h1><br>
            <table class ="table table-bordered">
                <form method="post" action="{{ route('sheet.store') }}" autocomplete="off" class="form-horizontal">
                    @csrf

                <tr>
                    <th id="row1", rowspan='2'><b>{{Form::label('form1', 'NAME & ADDRESS OF ORGANIZATION')}}</b></th>
                    <th id="rowid", colspan='2'><b>{{Form::label('form2', 'INCLUSIVE DATES')}}</b></th>
                    <th id="row1", rowspan='2'><b>{{Form::label('form3', 'NUMBER OF HOURS')}}</b></th>
                    <th id="row1", rowspan='2'><b>{{Form::label('form2','POSITION / NATURE OF WORK')}}</b></th>
                </tr>
                <tr>
                    <th id = "row2">{{Form::label('form21', 'From')}}</th>
                    <th id = "row2">{{Form::label('form22', 'To')}}</th>
                </tr>
                <tr>
                    <th>{{Form::text('vworgnameAddress1')}}</th>
                    <th>{{Form::date('vworgdateFrom1')}}</th>
                    <th>{{Form::date('vworgdateTo1')}}</th>
                    <th>{{Form::number('vworgnumHours1')}}</th>
                    <th>{{Form::text('vwPosition1')}}</th>
                </tr>
                <tr>
                    <th>{{Form::text('vworgnameAddress2')}}</th>
                    <th>{{Form::date('vworgdateFrom2')}}</th>
                    <th>{{Form::date('vworgdateTo2')}}</th>
                    <th>{{Form::number('vworgnumHours2')}}</th>
                    <th>{{Form::text('vwPosition2')}}</th>
                </tr>
                <tr>
                    <th>{{Form::text('vworgnameAddress3')}}</th>
                    <th>{{Form::date('vworgdateFrom3')}}</th>
                    <th>{{Form::date('vworgdateTo3')}}</th>
                    <th>{{Form::number('vworgnumHours3')}}</th>
                    <th>{{Form::text('vwPosition3')}}</th>
                </tr>
                <tr>
                    <th>{{Form::text('vworgnameAddress4')}}</th>
                    <th>{{Form::date('vworgdateFrom4')}}</th>
                    <th>{{Form::date('vworgdateTo4')}}</th>
                    <th>{{Form::number('vworgnumHours4')}}</th>
                    <th>{{Form::text('vwPosition4')}}</th>
                </tr>
                <tr>
                    <th>{{Form::text('vworgnameAddress5')}}</th>
                    <th>{{Form::date('vworgdateFrom5')}}</th>
                    <th>{{Form::date('vworgdateTo5')}}</th>
                    <th>{{Form::number('vworgnumHours5')}}</th>
                    <th>{{Form::text('vwPosition5')}}</th>
                </tr>
                <tr>
                    <th>{{Form::text('vworgnameAddress6')}}</th>
                    <th>{{Form::date('vworgdateFrom6')}}</th>
                    <th>{{Form::date('vworgdateTo6')}}</th>
                    <th>{{Form::number('vworgnumHours6')}}</th>
                    <th>{{Form::text('vwPosition6')}}</th>
                </tr>
                <tr>
                    <th>{{Form::text('vworgnameAddress7')}}</th>
                    <th>{{Form::date('vworgdateFrom7')}}</th>
                    <th>{{Form::date('vworgdateTo7')}}</th>
                    <th>{{Form::number('vworgnumHours7')}}</th>
                    <th>{{Form::text('vwPosition7')}}</th>
                </tr>
                <tr>
                    <th>{{Form::text('vworgnameAddress8')}}</th>
                    <th>{{Form::date('vworgdateFrom8')}}</th>
                    <th>{{Form::date('vworgdateTo8')}}</th>
                    <th>{{Form::number('vworgnumHours8')}}</th>
                    <th>{{Form::text('vwPosition8')}}</th>
                </tr>
                <tr>
                    <th>{{Form::text('vworgnameAddress9')}}</th>
                    <th>{{Form::date('vworgdateFrom9')}}</th>
                    <th>{{Form::date('vworgdateTo9')}}</th>
                    <th>{{Form::number('vworgnumHours9')}}</th>
                    <th>{{Form::text('vwPosition9')}}</th>
                </tr>
                <tr>
                    <th>{{Form::text('vworgnameAddress10')}}</th>
                    <th>{{Form::date('vworgdateFrom10')}}</th>
                    <th>{{Form::date('vworgdateTo10')}}</th>
                    <th>{{Form::number('vworgnumHours10')}}</th>
                    <th>{{Form::text('vwPosition10')}}</th>
                </tr>
            </table>

        </div>
        <div = class="page-break"></div>
        <div class ="VII">
        <h1>VII. LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING PROGRAMS ATTENDED</h1>
            <h3 style="font-style: italic;">(Start from the most recent L&D/training program and include only the relevant L&D/training taken for the last five (5) years for Division Chief/Executive/Managerial positions)</h3><br>
            <table class="table table-bordered">
                <tr>
                    <th id="row3", rowspan='2'><b>{{Form::label('form1', 'TITLE OF LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING PROGRAMS')}}</b></th>
                    <th id="rowid", colspan='2'><b>{{Form::label('form2', 'INCLUSIVE DATES OF ATTENDANCE')}}</b></th>
                    <th id="row3", rowspan='2'><b>{{Form::label('form3', 'NUMBER OF HOURS')}}</b></th>
                    <th id="row3", rowspan='2'><b>{{Form::label('form3', 'Type of LD')}}</b></th>
                    <th id="row3", rowspan='2'><b>{{Form::label('form2','CONDUCTED/SPONSORED BY')}}</b></th>
                </tr>
                <tr>
                    <th id="row4">{{Form::label('form21', 'From')}}</th>
                    <th id="row4">{{Form::label('form22', 'To')}}</th>
                </tr>
                {{-- form-inputs --}}
                <tr>
                    <th>{{Form::text('ldorgnameAddress1')}}</th>
                    <th>{{Form::date('ldorgdateFrom1')}}</th>
                    <th>{{Form::date('ldorgdateTo1')}}</th>
                    <th>{{Form::number('ldorgnumHours1')}}</th>
                    <th>{{Form::text('ldtype1')}}</th>
                    <th>{{Form::text('ldorgnameSponsor1')}}</th>
                </tr>
                <tr>
                    <th>{{Form::text('ldorgnameAddress2')}}</th>
                    <th>{{Form::date('ldorgdateFrom2')}}</th>
                    <th>{{Form::date('ldorgdateTo2')}}</th>
                    <th>{{Form::number('ldorgnumHours2')}}</th>
                    <th>{{Form::text('ldtype2')}}</th>
                    <th>{{Form::text('ldorgnameSponsor2')}}</th>
                </tr>
                <tr>
                    <th>{{Form::text('ldorgnameAddress3')}}</th>
                    <th>{{Form::date('ldorgdateFrom3')}}</th>
                    <th>{{Form::date('ldorgdateTo3')}}</th>
                    <th>{{Form::number('ldorgnumHours3')}}</th>
                    <th>{{Form::text('ldtype3')}}</th>
                    <th>{{Form::text('ldorgnameSponsor3')}}</th>
                </tr>
                <tr>
                    <th>{{Form::text('ldorgnameAddress4')}}</th>
                    <th>{{Form::date('ldorgdateFrom4')}}</th>
                    <th>{{Form::date('ldorgdateTo4')}}</th>
                    <th>{{Form::number('ldorgnumHours4')}}</th>
                    <th>{{Form::text('ldtype4')}}</th>
                    <th>{{Form::text('ldorgnameSponsor4')}}</th>
                </tr>
                <tr>
                    <th>{{Form::text('ldorgnameAddress5')}}</th>
                    <th>{{Form::date('ldorgdateFrom5')}}</th>
                    <th>{{Form::date('ldorgdateTo5')}}</th>
                    <th>{{Form::number('ldorgnumHours5')}}</th>
                    <th>{{Form::text('ldtype5')}}</th>
                    <th>{{Form::text('ldorgnameSponsor5')}}</th>
                </tr>
                <tr>
                    <th>{{Form::text('ldorgnameAddress6')}}</th>
                    <th>{{Form::date('ldorgdateFrom6')}}</th>
                    <th>{{Form::date('ldorgdateTo6')}}</th>
                    <th>{{Form::number('ldorgnumHours6')}}</th>
                    <th>{{Form::text('ldtype6')}}</th>
                    <th>{{Form::text('ldorgnameSponsor6')}}</th>
                </tr>
                <tr>
                    <th>{{Form::text('ldorgnameAddress7')}}</th>
                    <th>{{Form::date('ldorgdateFrom7')}}</th>
                    <th>{{Form::date('ldorgdateTo7')}}</th>
                    <th>{{Form::number('ldorgnumHours7')}}</th>
                    <th>{{Form::text('ldtype7')}}</th>
                    <th>{{Form::text('ldorgnameSponsor7')}}</th>
                </tr>
                <tr>
                    <th>{{Form::text('ldorgnameAddress8')}}</th>
                    <th>{{Form::date('ldorgdateFrom8')}}</th>
                    <th>{{Form::date('ldorgdateTo8')}}</th>
                    <th>{{Form::number('ldorgnumHours8')}}</th>
                    <th>{{Form::text('ldtype8')}}</th>
                    <th>{{Form::text('ldorgnameSponsor8')}}</th>
                </tr>
            </table>
        </div>
        <div = class="page-break"></div>
        <div class ="VIII">
        <h1>VIII. OTHER INFORMATION</h1>
            <table class="table table-bordered">
                <tr>
                    <th id="row5"><b>{{Form::label('form1', 'SPECIAL SKILLS and HOBBIES')}}</b></th>
                    <th id="row5"><b>{{Form::label('form2', 'NON-ACADEMIC DISTINCTIONS/RECOGNITION')}}</b></th>
                    <th id="row5"><b>{{Form::label('form3', 'MEMBERSHIP IN ASSOCIATION/ORGANIZATION')}}</b></th>
                </tr>
                <tr>
                    <th>{{Form::text('otherorgnameSkill1')}}</th>
                    <th>{{Form::text('otherorgnameDistinct1')}}</th>
                    <th>{{Form::text('otherorgnameMembership1')}}</th>
                </tr>
                <tr>
                    <th>{{Form::text('otherorgnameSkill2')}}</th>
                    <th>{{Form::text('otherorgnameDistinct2')}}</th>
                    <th>{{Form::text('otherorgnameMembership2')}}</th>
                </tr>
                <tr>
                    <th>{{Form::text('otherorgnameSkill3')}}</th>
                    <th>{{Form::text('otherorgnameDistinct3')}}</th>
                    <th>{{Form::text('otherorgnameMembership3')}}</th>
                </tr>
                <tr>
                    <th>{{Form::text('otherorgnameSkill4')}}</th>
                    <th>{{Form::text('otherorgnameDistinct4')}}</th>
                    <th>{{Form::text('otherorgnameMembership4')}}</th>
                </tr>
                <tr>
                    <th>{{Form::text('otherorgnameSkill5')}}</th>
                    <th>{{Form::text('otherorgnameDistinct5')}}</th>
                    <th>{{Form::text('otherorgnameMembership5')}}</th>
                </tr>
                <tr>
                    <th>{{Form::text('otherorgnameSkill6')}}</th>
                    <th>{{Form::text('otherorgnameDistinct6')}}</th>
                    <th>{{Form::text('otherorgnameMembership6')}}</th>
                </tr>
            </table>

        </div>

        {{-- <a href="C:\Users\PC\Downloads\DOST-OJT.pdf" target="_BLANK">Click here to open the file</a> --}}
        <a href="/sender" class="btn btn-primary">Save as PDF</a>
        <button type="submit", class="btn btn-primary">{{ __('Send') }}</button>


        {{Form::close()}}

        {{-- <button id="btn", href='/sender'>PRINT PAGE</button> --}}

    </div>

</html>

