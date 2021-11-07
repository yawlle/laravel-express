

<div class="form-group">
        <h4 id="form">{!! Form::label('title', 'Titulo:') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
        <br></h4>
    </div>

    <div class="form-group">
        <h4 id="form">{!! Form::label('content', 'Texto:') !!}<br></h4>
        {!! Form::textarea('content', null, ['class'=>'form-control']) !!}
    </div>
