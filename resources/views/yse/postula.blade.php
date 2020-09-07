@php
    $job = isset($_GET['j']) ? $_GET['j'] : '';

@endphp
@extends('yse.master')

@section('title', 'Ysé Peru - Postulaciones')

@section('content')

<section class="page-section bg-dark-alfa-50 parallax-3" data-background="{{asset('provisional/images/full-width-images/section-bg-3.jpg')}}">
    <div class="relative container align-left">
        <div class="row">
            <div class="col-md-12 general-breadcrumbs">
                <h1 class="hs-line-11 font-alt mb-0 mb-xs-0 alvira-breadcrumbs">Postula</h1>
                <div class="hs-line-4 font-alt display-none-xss mb-15 mb-xs-5">
                    Trabaja con nosotros
                </div>
                <div class="hs-line-3 font-alt mod-breadcrumbs">
                    <a href="{{asset('home')}}">Home</a> /  <span>Postula</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Head Section -->
<!-- Start Contact Section -->
<section class="page-section">

    <div class="container">
        <h2><small> Estamos buscando:</small> </h2>

        <div class="row">
            <div class="col-lg-12">
                @switch($job)
                    @case('asistente-administrativo')
                    <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Asistente Administrativo</h5>
                          <h6 class="card-subtitle mb-2 text-muted">Part Time</h6>
    
                          <p>En <strong>Ysé Peru</strong> estamos buscando alguien con el siguiente perfil para que se 
                            incorpore a nuestro equipo en la planificación y lanzamiento de nuestro pronto canal e-commerce. 
                            
                            </p>
    
                          <ul class="list-unstyled">
                     
                            
                            <li> <strong>Requisitos</strong> 
                              <ul>
                                <li>Estudiante universitario/instituto de la carrera de administracion o afines</li>
                                <li>Manejo de Excel nivel basico/intermedio, manejo de filtros y formulas</li>                        
                                <li>Disponibilidad para trabajar desde casa con una pc y buena conexion a internet</li>
                                <li>No es necesaria tener experiencia previa</li>
                                <li>Emitir recibos por honorarios</li>                            
                              </ul>
                            </li>
                            <li><strong> Funciones</strong>
                                <ul>
                                  <li>Gestion de bases de datos en excel</li>
                                  <li>Emision de facturas electronicas</li>
                                  <li>Preparacion y correcion de documentos y presentaciones keynote</li>                           
                                  <li>Manejo de correos</li>  
                                </ul>
                            </li>
                            <li><strong> Competencia</strong>
                                <ul>
                                  <li>Responsabilidad</li>
                                  <li>Empatía</li>
                                  <li>Proactividad</li>                           
                                  <li>Buena comunicación</li>  
                                </ul>
                            </li>
                            <li><strong> Ofrecemos</strong>
                                <ul>
                                  <li>Modalidad recibo por honorarios</li>
                                  <li>Horarios flexibles</li>
                                  <li>Teletrabajo</li>                                                         
                                </ul>
                            </li>                        
    
                           
                          </ul>
    
                          
                        </div>
                    </div>
                        @break
                    @case('disenador-grafico-jr')
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Diseñador Gráfico Jr. 
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted">Freelance</h6>
      
                            <p>En <strong>Ysé Peru</strong> estamos buscando alguien con el siguiente perfil para que se 
                              incorpore a nuestro equipo para repotenciar la marca en el lanzamiento de nuestro pronto canal e-commerce. 
                              
                              </p>
      
                            <ul class="list-unstyled">
                       
                              
                              <li> <strong>Requisitos</strong> 
                                <ul>
                                  <li> Mínimo 06 meses de experiencia.</li>
                                  <li> Experiencia en diseño de piezas gráficas digitales e impresas: volantes, emailings, publicidad para redes sociales, páginas web y otro contenido digital.</li>                        
                                  <li> Manejo avanzado de Photoshop, Ilustrator</li>                              
                                  <li>Emitir recibos por honorarios</li>                            
                                </ul>
                              </li>
                              <li><strong> Funciones</strong>
                                  <ul>
                                    <li>Diseñar material gráfico publicitario para nuestros diferentes medios tanto redes sociales, catalogós</li>
                                    <li>Retocar fotografias propocionadas por nuestro equipo de fotografía</li>
                                    <li>Enviar sugerencias sobre nuevos diseños o propuestas de mejora.</li>   
                                  </ul>
                              </li>
                              <li><strong> Competencia</strong>
                                  <ul>
                                    <li>Creatividad</li>
                                    <li>Responsabilidad</li>
                                    <li>Empatía</li>
                                    <li>Proactividad</li>                           
                                    <li>Buena comunicación</li>  
                                  </ul>
                              </li>
                              <li><strong> Ofrecemos</strong>
                                  <ul>
                                    <li>Modalidad recibo por honorarios</li>
                                    <li>Remuneración acorde al mercado</li>
                                    <li>Horarios flexibles</li>
                                    <li>Teletrabajo</li>                                                         
                                  </ul>
                              </li>                        
      
                             
                            </ul>
      
                            
                          </div>
                    </div>
                        @break
                    @default
                        <div>
                            <p>Sin postulaciones encontradas.</p>
                        </div>
                        
                @endswitch

                @if($errors->any())

                <div class="alert alert-info mt-5" role="alert" id="errors_m">
                    <p><strong>Oops!</strong> se producieron ciertos errores:</p>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    <input type="hidden" value="1" id="there_errors">
                </div>
                    
                @endif  
                
                @if (session('status'))
                    <div class="alert alert-success mt-5" role="alert" id="success_m">
                       <p><strong>Se ingreso la postulación!</strong></p>
                        <input type="hidden" value="1" id="success_flag">
                    </div>
                @endif
                

                <div class="col-md-12 mt-3">
                    <h4>Postula:</h4>
                <form method="POST" class="form contact-form" id="contact_formx" action="{{route('postula.s')}}" enctype="multipart/form-data" >
                        @csrf
                        <input type="hidden" name='job' value="{{$job}}">
                        <div class="clearfix">
                            <div class="cf-left-col">

                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="input-md round form-control" placeholder="Nombres" 
                                    value="{{old('name')}}"
                                    required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="lastname" id="lastname" class="input-md round form-control" placeholder="Apellidos" 
                                    value="{{old('lastname')}}"
                                    required>
                                </div>
                                
                            </div>
                            <div class="cf-right-col">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="input-md round form-control" placeholder="Correo electrónico" 
                                    value="{{old('email')}}"
                                    required>
                                </div>
                                <div class="form-group">
                                    <input type="number" name="phone" id="phone" class="input-md round form-control" placeholder="Teléfono" 
                                    value="{{old('phone')}}"
                                    required>
                                </div>
                            
                            </div>
                            <div class="form-group">
                                <label for="cv">Adjunta tu CV. (Max 2MB)</label>
                                <input type="file" name="cv" id="cv" class="input-md round form-control" 
                                value="{{old('cv')}}"
                                 required>
                            </div>

                        </div>
                        <div class="clearfix mt-4 text-center">
                            
                       
                         <button class="submit_btn btn btn-mod btn-medium btn-round" type="submit" >Postula ahora</button>
                              
                        </div>
                        <div id="result"></div>
                    </form>
                </div>

        
            
            </div>
        </div>
        
    </div>
</section>
    
@endsection

@section('scripts')
    <script>
        $( document ).ready(function() {
            if( $('#there_errors').length )  
            {
                document.getElementById('errors_m').scrollIntoView();

            }
            if( $('#success_flag').length )  
            {
                document.getElementById('success_m').scrollIntoView();

            }
            
            
        });
    </script>
@endsection