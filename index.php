<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./estilo.css">
    <title>Curriculum Vitae</title>
</head>
<body>
    <!--Menu Encabezado-->
    <div class="contenedor-header">
        <header>
            <div class="logo">
                <a href="#">Curriculum Vitae</a>
            </div>
            <nav id="nav">
                <ul>
                    <li><a href="#inicio" onclick="seleccionar()">INICIO</a></li>
                    <li><a href="#sobremi" onclick="seleccionar()">SOBRE MI</a></li>
                    <li><a href="#skills" onclick="seleccionar()">SKILLS</a></li>
                    <li><a href="#curriculum" onclick="seleccionar()">CURRICULUM</a></li>
                    <li><a href="#portfolio" onclick="seleccionar()">PORTFOLIO</a></li>
                    <li><a href="#contacto" onclick="seleccionar()">CONTACTO</a></li>

                </ul>
            </nav>
            <div class="nav-responsive" onclick="mostrarOcultarMenu()">
                <i class="fa-sharp fa-solid fa-bars"></i>
            </div>
        </header>

    </div>

    <!--Seccion Inicio-->
    <section id="inicio" class="inicio">
        <div class="contenido-banner">
            <div class="contenedor-img">
                <img src="img/fotoperfil.jpg" alt="imagen de perfil">
            </div>
            <h1>Elias Nicolas Zarate</h1>
            <h2>Tecnico superior en Analisis y Desarrollo de Software</h2>
            <div class="redes">
                <a href="https://www.instagram.com/eliasnicolaszarate" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/eliasnicolaszarate" target="_blank"><i class="fa-brands fa-linkedin"></i></a>

            </div>
        </div>
    </section>

    <!--Seccion Sobre mi-->
    <section id="sobremi" class="sobremi">
        <div class="contenido-seccion">
            <h2>Sobre Mi</h2>
            <p>Hola mi nombre es Elias Zarate soy tecnico superior en Analisis y Desarrollo de software.
            En el año 2020 abri mi propio negocio "Framework Informatica" para brindar soporte tecnico y 
              pequeñas soluciones de software y paginas web en negocios locales.
              Trabajé muchos años en atencion al cliente y soporte tecnico en una empresa que se llama 
              Electronica Urquiza y al mismo tiempo me desempeñaba como referente tecnico escolar del programa 
              Conectar Igualdad capacitando y brindando las herramientas necesarias a los docentes y a cargo de 
              los servidores escolares en tareas de mantenimiento y politicas de backups. tambien me desempeñe 
              como referente tecnico en el instituto superior Federal de Entre Rios a cargo de la pagina web, 
              del aula virtual y tambien capacitando a los docentes.
               </p>
            <div class="fila">
                <!--Datos personales-->
                <div class="col">
                     <h3>Datos Personales</h3>   
                     <ul>
                        <li>
                            <strong>Fecha Nacimiento</strong>
                            11-02-1989
                        </li>
                        <li>
                            <strong>E-mail</strong>
                            eliasnicolaszarate@gmail.com
                        </li>
                        <li>
                            <strong>Domicilio/s</strong>
                             Hernandarias - Argentina / Montevideo - Uruguay

                        </li>
                        <li>
                            <strong>Cargo</strong>
                            FREELANCE 
                        </li>
                     </ul>
                </div>

              
            <button >
            <a href="https://drive.google.com/file/d/1vu-MJYtVKE1Iu2wWhO0p6fvnlQ3QEFmm/view?usp=drive_link">Descargar CV <i class="fa-solid fa-download"></i>
                <span class="overlay"> </span></a>
            
            </button>

        </div>
    </section>

    <!--Seccion Skills-->
    <section class="skills" id="skills">
        <div class="contenido-seccion">
            <h2>SKILLS</h2>
            <div class="fila">
                <!--Technical Skill-->
                <div class="col">
                    <h3>Technical Skills</h3>
                    <div class="skill">
                        <span>.Net</span>
                        <div class="barra-skill">
                            <div class="progreso javascript">
                                <span>75%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>SQL</span>
                        <div class="barra-skill">
                            <div class="progreso htmlcss">
                                <span>89%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Backend</span>
                        <div class="barra-skill">
                            <div class="progreso javascript">
                                <span>75%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Frontend</span>
                        <div class="barra-skill">
                            <div class="progreso wordpress">
                                <span>60%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Android</span>
                        <div class="barra-skill">
                            <div class="progreso bootstrap">
                                <span>60%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Professionnal Skills-->
                <div class="col">
                    <h3>Profesionals Skills</h3>
                    <div class="skill">
                        <span>Trabajo en equipo</span>
                        <div class="barra-skill">
                            <div class="progreso equipo">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Adaptacion</span>
                        <div class="barra-skill">
                            <div class="progreso equipo">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Pensamiento analitico</span>
                        <div class="barra-skill">
                            <div class="progreso equipo">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Dedicación</span>
                        <div class="barra-skill">
                            <div class="progreso equipo">
                                <span>100%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Optimizacion de recursos</span>
                        <div class="barra-skill">
                            <div class="progreso equipo">
                                <span>95%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Seccion Curriculum-->
    <section id="curriculum" class="curriculum">
        <div class="contenido-seccion">
            <h2>Curriculum</h2>
            <div class="fila">
                <div class="col izquierda">
                    <h3>Educación</h3>
                    <div class="item izq">
                        <h4>Educación</h4>
                        <span class="casa">EPMN N72 Pancho Ramirez</span>
                        <span class="fecha">2001-2006</span>
                        <p>Secundario Completo.</p>
                        <div class="conectori">
                            <div class="circuloi"></div>
                        </div>      
                    </div>
                    <div class="item izq">
                        <h4>Terciario</h4>
                        <span class="casa">Tecnicatura Superior en Analisis y Desarrollo de Software</span>
                        <span class="fecha">2016-2019</span>
                        <p>Terciario finalizado.</p>
                        <div class="conectori">
                            <div class="circuloi"></div>
                        </div>      
                    </div>
                    <div class="item izq">
                        <h4>Curso desarrollador java inicial</h4>
                        <span class="casa">Argentina Programa - Universidad Tecnologica Nacional</span>
                        <span class="fecha">2023</span>
                        <div class="conectori">
                            <div class="circuloi"></div>
                        </div>      
                    </div> <div class="item izq">
                        <h4>Programa Codo a Codo - Fullstack PHP</h4>
                        <span class="casa">Gobierno de la Ciudad de Buenos Aires</span>
                        <span class="fecha">2023</span>
                        <div class="conectori">
                            <div class="circuloi"></div>
                        </div>      
                    </div>
                </div>

                <div class="col derecha">
                    <h3>Experiencia laboral</h3>
                    <div class="item der">
                        <h4>Atencion al cliente - Soporte tecnico</h4>
                        <span class="casa">Electronica Urquiza</span>
                        <span class="fecha">Nov 2009 - Dic 2019</span>
                        <div class="conectoro">
                            <div class="circuloi"></div>
                        </div>      
                    </div>
                    <div class="item der">
                        <h4>Referente Tecnico Escolar</h4>
                        <span class="casa">Consejo General de Educacion</span>
                        <span class="fecha">Mar 2013 - Feb 2019</span>
                        <div class="conectoro">
                            <div class="circuloi"></div>
                        </div>      
                    </div>
                    <div class="item der">
                        <h4>Referente tecnico superior</h4>
                        <span class="casa">Instituto superior Federal</span>
                        <span class="fecha">Mar 2019 - Dic 2021</span>
                        <div class="conectoro">
                            <div class="circuloi"></div>
                        </div>      
                    </div>
                    <div class="item der">
                        <h4>Soporte tecnico - Desarrollador</h4>
                        <span class="casa">Framework Informatica</span>
                        <span class="fecha">Ene 2020 - Mar 2024</span>
                        <div class="conectoro">
                            <div class="circuloi"></div>
                        </div>      
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Seccion Portfolio-->
    <div class="portfolio" id="portfolio">
        <div class="contenido-seccion">
            <h2>PORTFOLIO</h2>
            <div class="galeria">
                <div class="proyecto">
                    <a href="https://frameworkinformatica.000webhostapp.com/" target="_blank">
                        <img src="img/screenframework.png" alt="">
                    </a>
                    <div class="overlay">
                        <h3>pagina framework informatica</h3>
                        <p>pagina web</p>
                    </div>
                </div>

                <div class="proyecto">
                    <a href="" target="_blank">
                        <img src="img/aplicacionesnet.png" alt="">
                    </a>
                    <div class="overlay">
                        <h3>aplicaciones .net</h3>
                    </div>
                </div>

                <div class="proyecto">
                    <a href="" target="_blank">
                        <img src="img/aplicacionesjava.png" alt="">
                    </a>
                    
                    <div class="overlay">
                        <h3>aplicaciones java</h3>
                    </div>
                </div>
               
                <div class="proyecto">
                    <a href="" target="_blank">
                        <img src="img/basesdedatos.png" alt="">
                    </a>
                    <div class="overlay">
                        <h3>bases de datos mysql</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./javascript.js"></script>






    <!--Seccion Footer-->
    <footer id="contacto">
        
        <div class="redes">
           <a href="https://wa.me/59892391693" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
           <a href="mailto:eliasnicolaszarate@gmail.com" target="_blank"><i class="fa-brands fa-google"></i></a>
           <a href="https://www.instagram.com/eliasnicolaszarate" target="_blank"><i class="fa-brands fa-instagram"></i></a>
           <a href="https://www.linkedin.com/in/eliasnicolaszarate" target="_blank"><i class="fa-brands fa-linkedin"></i></a>

        </div>

        <a href="#inicio" class="arriba">
            <i class="fa-solid fa-angles-up"></i>
        </a>
    </footer>
</body>
</html>