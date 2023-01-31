<script type="text/javascript" src="{{ URL::asset('/js/flash-message.js') }}" defer></script>

@if ($message = Session::get('destroy'))
<div class="alert danger"  role="alert">
  <strong>{{ $message }}</strong>
  <input type="button" class="closebtn" data-bs-dismiss="alert" aria-label="Close" value="X">
</div>
@endif

@if ($message = Session::get('success'))
<div class="alert success"  role="alert">
  <strong>{{ $message }}</strong>
  <input type="button" class="closebtn" data-bs-dismiss="alert" aria-label="Close" value="X">
</div>
@endif
     
@if ($message = Session::get('info'))
<div class="alert info" role="alert">
  <strong>{{ $message }}</strong>
  <input type="button" class="closebtn" data-bs-dismiss="alert" aria-label="Close" value="X">
</div>
@endif
     
@if ($message = Session::get('warning'))
<div class="alert warning" role="alert">
  <strong>{{ $message }}</strong>
  <input type="button" class="closebtn" data-bs-dismiss="alert" aria-label="Close" value="X">
</div>
@endif

@if ($errors->any())
<div class="alert" role="alert">
  <strong>Por favor revise el formulario para ver si hay errores</strong>
  <input type="button" class="closebtn" data-bs-dismiss="alert" aria-label="Close" value="X">
</div>
@endif
