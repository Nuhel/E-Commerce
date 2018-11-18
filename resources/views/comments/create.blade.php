        {!! Form::open(['route' => 'comments.store','files' => true]) !!}
                        
                        {{ Form::label('name', "Name:") }}
                        {{ Form::text('name', null, ['class' => 'form-control']) }} <em>*</em></label>
                      </div>

                      <div class="form-element">
                        <label>{{ Form::label('email', "Email:") }}
                       
                        {{ Form::text('email', null, ['class' => 'form-control']) }}</label>
              
                        <label>{{ Form::label('comment', "Review") }} <em>*</em></label>
                        
                        {{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) }}
                     
                         
                        {{ Form::submit('Add Comment', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px;']) }}
      
            {{ Form::close() }}