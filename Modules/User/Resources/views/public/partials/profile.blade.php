{!! Form::open(['route' => 'account.update', 'method' => 'put']) !!}
<div class="form-group">
    <label for="exampleInputEmail1">Firstname</label>
    <input type="text" class="form-control" id="firstname" placeholder="Firstname">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Lastname</label>
    <input type="text" class="form-control" id="lastname" placeholder="Lastname">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Date of bird</label>
    <input data-provide="datepicker" data-date-format="dd.mm.yyyy" data-date-language="ru" class="form-control" id="dob" placeholder="Date of bird">
</div>

<div class="form-group">
    <label for="exampleInputEmail1">Gender</label>
    <div class="btn-group" data-toggle="buttons">
        <label class="btn btn-primary">
            <input type="radio" name="gender" id="gender_male" checked>male
        </label>
        <label class="btn btn-primary">
            <input type="radio" name="gender" id="gender_female"> female
        </label>
    </div>
</div>
<button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
