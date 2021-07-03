<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>COVID-19 info</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/owl.carousel/')}}{{asset('assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">

    </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="index.html">Info-Zone</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="{{asset('assets/img/logo.png')}}" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="#why-us">Home</a></li>
                <li><a href="#Symptoms">Symptoms</a></li>
                <li><a href="#counts">Global Stats</a></li>
                <li><a href="#services">Prevention</a></li>
                <li><a href="#appointment">Country Statistics</a></li>
                <li><a href="#departments">Medical Facts</a></li>
                <li><a href="#faq">FAQ</a></li>
                <li><a href="#contact">Subscribe</a></li>

            </ul>
        </nav><!-- .nav-menu -->

        @if(auth()->user())
            <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
               class="appointment-btn scrollto">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        @else
            <a href="{{route('login')}}" class="appointment-btn scrollto">Admin Login</a>
        @endif
    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center" style="background: url('{{asset('assets/img/covid-bg.jpg')}}') top center;background-repeat:no-repeat;background-size:cover;">
    <div class="container">
        <h1>Welcome to Info Zone</h1>
        <h2>Info Zone is a non-profit Covid-19 Informational Center Site</h2>
        <a href="#Symptoms" class="btn-get-started scrollto">Get Started</a>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="content">
                        <h3>What is Covid-19</h3>
                        <p>
                            COVID-19 is the disease caused by a new coronavirus called SARS-CoV-2. The first known case was identified in Wuhan, China in December 2019. The disease has since spread worldwide, leading to an ongoing pandemic.
                        </p>
                        <div class="text-center">
                            <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Specialty</h4>
                                    <p>Infectious disease caused by severe acute respiratory syndrome coronavirus 2</p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Symptoms</h4>
                                    <p>Fever, cough, fatigue, shortness of breath, vomiting, loss of taste or smell; some cases asymptomatic</p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-images"></i>
                                    <h4>Prevention</h4>
                                    <p>Face coverings, quarantine, physical/social distancing, ventilation, hand washing</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="Symptoms" class="about">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" style="background: url('{{asset('https://www.who.int/images/default-source/wpro/countries/philippines/emergencies/covid-19/protective-measures/typhoon-e.jpg')}}') center center no-repeat;background-size: cover;">
                    <a href="https://www.youtube.com/watch?v=BtN-goy9VOY" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                </div>

                <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                    <h3>COVID-19 Virus Symptoms</h3>
                    <p>COVID-19 affects different people in different ways. Most infected people will develop mild to moderate illness and recover without hospitalization. On average it takes 5–6 days from when someone is infected with the virus for symptoms to show, however it can take up to 14 days.
                    </p>
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxs-virus"></i></div>
                        <h4 class="title"><a href="">Most Common Symptoms</a></h4>
                        <ul class="description">
                            <li>Fever</li>
                            <li>Dry cough</li>
                            <li>Fatigue</li>
                        </ul>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="bx bxs-first-aid"></i></div>
                        <h4 class="title"><a href="">Less Common Symptoms</a></h4>
                        <ul class="description">
                            <li>Loss of taste or smell</li>
                            <li>Aches and Pains</li>
                            <li>Sore throat</li>
                            <li>Diarrhea</li>
                            <li>Conjunctivitis</li>
                            <li>Different types of skin rash</li>
                            <li>a Rash on Skin, or Discolouration of Fingers or Toes</li>
                            <li>Headache</li>
                        </ul>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="bx bxs-ambulance"></i></div>
                        <h4 class="title"><a href="">Severe Symptoms</a></h4>
                        <ul class="description">
                            <li>Difficulty Breathing or Shortness of Breath</li>
                            <li>Chest Pain or Pressure</li>
                            <li>High temperature (above 38 °C)</li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="count-box">
                        <i class="icofont-doctor-alt"></i>
                        <span data-toggle="counter-up">{{number_format($stats['Global']['TotalConfirmed'], 0, '.', ',')}}</span>
                        <p>Total Cases</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                    <div class="count-box">
                        <i class="icofont-patient-bed"></i>
                        <span data-toggle="counter-up">{{number_format($stats['Global']['TotalRecovered'], 0, '.', ',')}}</span>
                        <p>Total Recovered</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="icofont-laboratory"></i>
                        <span data-toggle="counter-up">{{number_format($stats['Global']['TotalDeaths'], 0, '.', ',')}}</span>
                        <p>Total Deaths</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Prvention Methods</h2>
                <p>
                    Protect yourself and others around you by knowing the facts and taking appropriate precautions. Follow advice provided by your local health authority. Those diagnosed with COVID-19 or who believe they may be infected are advised by the CDC to stay home except to get medical care
                </p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-injection-syringe"></i></div>
                        <h4><a>Vaccination</a></h4>
                        <p>A COVID‑19 vaccine is a vaccine intended to provide acquired immunity against severe acute respiratory syndrome coronavirus 2</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-surgeon"></i></div>
                        <h4><a>Face Masks</a></h4>
                        <p>The WHO and the US CDC recommend individuals wear non-medical face coverings in public settings where there is an increased risk of transmission</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-people"></i></div>
                        <h4><a>Avoiding Crowds</a></h4>
                        <p>The CDC recommends that crowded indoor spaces should be avoided</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-holding-hands"></i></div>
                        <h4><a>Hand-washing</a></h4>
                        <p>Thorough hand hygiene after any cough or sneeze is required. The WHO also recommends that individuals wash hands often with soap and water</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-brand-myspace"></i></div>
                        <h4><a>Social Distancing</a></h4>
                        <p>Social distancing (also known as physical distancing) includes infection control actions intended to slow the spread of the disease by minimising close contact between individuals</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-dining-table"></i></div>
                        <h4><a>Surface Cleaning</a></h4>
                        <p>If a person touches the dirty surface, they may deposit the virus at the eyes, nose, or mouth where it can enter the body and cause infection</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Virus Statistics</h2>
                <p>Query countries latest COVID-19 statistics and figures</p>
            </div>

            <form action="{{route('get_statistics')}}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="col-md-2 form-group">

                    </div>
                    <div class="col-md-6 form-group">
                        <select required name="country" id="country" class="form-control">
                            <option value="">Select Country</option>
                            @foreach($countries as $country)
                                <option value="{{$country['Slug']}}">{{$country['Country']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <button type="submit" class="btn btn-primary">Get Statistics</button>
                    </div>
                </div>
            </form>

            <br>
            <br>
            <div>
                @isset($countrySummary)
                    <p><strong>Country:</strong> {{$countrySummary['Country']}}</p>
                    <p><strong>Country Code:</strong> {{$countrySummary['CountryCode']}}</p>
                    <p><strong>Confirmed Cases:</strong> {{$countrySummary['Confirmed']}}</p>
                    <p><strong>Recovered:</strong> {{$countrySummary['Recovered']}}</p>
                    <p><strong>Active Cases:</strong> {{$countrySummary['Active']}}</p>
                    <p><strong>Deaths:</strong> {{$countrySummary['Deaths']}}</p>
                @endisset
            </div>
        </div>
    </section><!-- End Appointment Section -->

    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
        <div class="container">

            <div class="section-title">
                <h2>COVID-19 Medical Facts</h2>
                <p>Below are various medical facts about the COVID-19 virus and the SARS virus family</p>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column">
                        <li class="nav-item">
                            <a class="nav-link active show" data-toggle="tab" href="#tab-1">Transmission</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-2">Virology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-3">Pathophysiology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-4">Immunopathology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-5">Virus proteins</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9 mt-4 mt-lg-0">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-1">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Transmission</h3>
                                    <p class="font-italic">The disease is mainly transmitted via the respiratory route when people inhale droplets and particles that infected people release as they breathe, talk, cough, sneeze, or sing. Infected people are more likely to transmit COVID-19 the when they are physically close. However, infection can occur over longer distances, particularly indoors.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{asset('assets/img/transition.jpg')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-2">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Virology</h3>
                                    <p class="font-italic">Severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) is a novel severe acute respiratory syndrome coronavirus. It was first isolated from three people with pneumonia connected to the cluster of acute respiratory illness cases in Wuhan. All structural features of the novel SARS-CoV-2 virus particle occur in related coronaviruses in nature</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{asset('assets/img/virlogy.webp')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-3">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Pathophysiology</h3>
                                    <p class="font-italic">COVID-19 can affect the upper respiratory tract (sinuses, nose, and throat) and the lower respiratory tract (windpipe and lungs). The lungs are the organs most affected by COVID-19 because the virus accesses host cells via the receptor for the enzyme angiotensin-converting enzyme 2 (ACE2), which is most abundant on the surface of type II alveolar cells of the lungs. The virus uses a special surface glycoprotein called a "spike" (peplomer) to connect to the ACE2 receptor and enter the host cell</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{asset('assets/img/pathyo.jpg')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-4">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Immunopathology</h3>
                                    <p class="font-italic">Although SARS-CoV-2 has a tropism for ACE2-expressing epithelial cells of the respiratory tract, people with severe COVID-19 have symptoms of systemic hyperinflammation. Clinical laboratory findings of elevated IL‑2, IL‑7, IL‑6, granulocyte-macrophage colony-stimulating factor (GM‑CSF), interferon gamma-induced protein 10 (IP‑10), monocyte chemoattractant protein 1 (MCP1), macrophage inflammatory protein 1‑alpha (MIP‑1‑alpha), and tumour necrosis factor (TNF‑α) indicative of cytokine release syndrome (CRS) suggest an underlying immunopathology</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{asset('assets/img/imu.jpg')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-5">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Virus proteins</h3>
                                    <p class="font-italic">Multiple viral and host factors affect the pathogenesis of the virus. The S-protein, otherwise known as the spike protein, is the viral component that attaches to the host receptor via the ACE2 receptors. It includes two subunits: S1 and S2. S1 determines the virus-host range and cellular tropism via the receptor-binding domain. S2 mediates the membrane fusion of the virus to its potential cell host via the H1 and HR2, which are heptad repeat regions. Studies have shown that S1 domain induced IgG and IgA antibody levels at a much higher capacity. It is the focus spike proteins expression that are involved in many effective COVID-19 vaccines</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{asset('assets/img/protien.jpg')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Departments Section -->


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">What happens to people who get COVID-19? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                            <p>
                                Among those who develop symptoms, most (about 80%) recover from the disease without needing hospital treatment. About 15% become seriously ill and require oxygen and 5% become critically ill and need intensive care.

                                Complications leading to death may include respiratory failure, acute respiratory distress syndrome (ARDS), sepsis and septic shock, thromboembolism, and/or multiorgan failure, including injury of the heart, liver or kidneys.

                                In rare situations, children can develop a severe inflammatory syndrome a few weeks after infection.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Who is most at risk of severe illness from COVID-19? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                            <p>
                                People aged 60 years and over, and those with underlying medical problems like high blood pressure, heart and lung problems, diabetes, obesity or cancer, are at higher risk of developing serious illness.

                                However, anyone can get sick with COVID-19 and become seriously ill or die at any age.                             </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Are there long-term effects of COVID-19? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                            <p>
                                Some people who have had COVID-19, whether they have needed hospitalization or not, continue to experience symptoms, including fatigue, respiratory and neurological symptoms.

                                WHO is working with our Global Technical Network for Clinical Management of COVID-19, researchers and patient groups around the world to design and carry out studies of patients beyond the initial acute course of illness to understand the proportion of patients who have long term effects, how long they persist, and why they occur.  These studies will be used to develop further guidance for patient care.                              </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">When should I get a test for COVID-19? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                            <p>
                                Anyone with symptoms should be tested, wherever possible. People who do not have symptoms but have had close contact with someone who is, or may be, infected may also consider testing – contact your local health guidelines and follow their guidance.

                                While a person is waiting for test results, they should remain isolated from others. Where testing capacity is limited, tests should first be done for those at higher risk of infection, such as health workers, and those at higher risk of severe illness such as older people, especially those living in seniors’ residences or long-term care facilities.                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">How long does it take to develop symptoms? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                            <p>
                                The time from exposure to COVID-19 to the moment when symptoms begin is, on average, 5-6 days and can range from 1-14 days. This is why people who have been exposed to the virus are advised to remain at home and stay away from others, for 14 days, in order to prevent the spread of the virus, especially where testing is not easily available.                            </p>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->


@if(auth()->user()){
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Send a Message</h2>
                <p>Send a message notifying users with the latest changes about the COVID-19 Virus</p>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-12 mt-5 mt-lg-0 justify-content-center">
                    <form action="{{route('mail')}}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <input type="text" name="title" class="form-control" id="name" placeholder="Message Tittle" data-rule="minlen:4" required />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <textarea name="message" id="body" class="form-control" cols="30" rows="10" placeholder="Messege Content" required></textarea>
                            </div>
                        </div>
                        <div class="form-row justify-content-center">
                            <div class="col-md-4">
                                <div class="text-center"><button class="btn btn-primary" type="submit">Notify Users</button></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->
@else
    <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title">
                    <h2>Join Our Newsletter</h2>
                    <p>Join our covid-19 mail service to get the latest info and updates about the virus</p>
                </div>
            </div>
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-12 mt-5 mt-lg-0 justify-content-center">
                        <form action="{{route('subscribe')}}" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-5 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" required />
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" required />
                                </div>
                                <div class="col-md-1">
                                    <div class="text-center"><button class="btn btn-primary" type="submit">Subscribe</button></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->
@endif

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container d-md-flex py-4">
        <div class="mr-md-auto text-center text-md-left">
            <div class="copyright">
                &copy; Copyright <strong><span>Ahmad Faroukh</span></strong>. All Rights Reserved
            </div>
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
<script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
<script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>