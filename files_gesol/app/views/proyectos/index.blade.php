
	
</html>


<h4>Sofware</h4>
@foreach ($proyectosSoftware as $proyecto) 

<li>{{$proyecto->nombre}}</li>

@endforeach

<h4>linux</h4>

@foreach ($proyectosLinux as $proyecto) 

<li>{{$proyecto->nombre}}</li>

@endforeach

<h4>redes</h4>

@foreach ($proyectosRedes as $proyecto) 

<li>{{$proyecto->nombre}}</li>

@endforeach

<h4>hardware</h4>

@foreach ($proyectosHardware as $proyecto) 

<li>{{$proyecto->nombre}}</li>

@endforeach