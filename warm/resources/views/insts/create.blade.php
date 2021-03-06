@extends('layouts.insts.app')
@section('content')

<div class="container">

<h1 class="heading">Create Event</h1>

<div class="row">
    <form action="i_e_insert.php" method="post" enctype="multipart/form-data" class="col s12">
        <div class="row">
            <div class="input-field col s12">
                <input type="text" name="e_title" class="validate">
                <label for="e_title">Event Title</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input type="text" name="date" class="datepicker">
                <label for="date">Date</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input type="text" name="starttime" class="timepicker">
                <label for="starttime">Start Time</label>
            </div>
            <div class="input-field col s6">
                <input type="text" name="endtime" class="timepicker">
                <label for="endtime">End Time</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea name="e_detail" id="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1">Event details</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <select name="lvl[]" id="" multiple>
                    <option value="" disabled selected>Choose level(s)</option>
                    <?= $view ?>
                 </select>
                 <label for="lvl">Target Study Level</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <select name="sbj[]" id="" multiple>
                    <option value="" disabled selected>Choose subject(s)</option>
                    <?= $view2?>
                </select>
                <label for="sbj">Target Subject Areas</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <select name="rgn[]" id="" multiple>Target Region/select>
                    <option value="" disabled selected>Choose region(s)</option>
                    <?= $view3?>
                 </select>
                 <label for="rgn">Target Regions</label>
            </div>
        </div>
        <div class="file-field input-field mb40">
            <div class="btn">
                <span>File</span>
                <input type="file" name="upfile">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
            </div>
        </div>
       <!-- <div class="row">
           <input type="file" name="upfile">
       </div> -->
        <input type="hidden" name="inst_id" value="<?=$_SESSION["i_inst_id"]?>">
        <input type="hidden" name="iuser_id" value="<?=$_SESSION["iuser_id"]?>">
        <div>
            <input type="submit" value="Submit" class="btn-submit_i btn-filter">
        </div>
    </form>
</div>
</div>


@endsection('content')