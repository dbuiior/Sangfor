@extends('layouts.app')

@section('title','Landing Page')

@section('css')
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
        }
        .image{
            width: 100%;
        }

        .text-overlay{
            position: absolute;
            left: 20%;  
            max-width: 35%;
            z-index: 1;
        }

        .text-overlay.first {
            top: 35%;
            font-size: 2.5rem;
            font-weight: bolder;
        }

        .text-overlay.second {
            top: 50%;
            font-size: 1.25rem;
            z-index: 2;
        }

        .text-overlay.third{
            top: 65%;
            font-size: 1.25rem;
            z-index: 2;
            max-width: 200px;
            width: 100%;
            background-color: #04BE02;
        }

        .reference{
            width: 10%;
            height: 10%;
        }

        /* Dekstop Responsive */
        @media (min-width: 1024px){
            .first{
                top: 30% !important;
                font-size: 2rem !important;
            }  

            .second{
                top: 40% !important;
            }

            .third{
                top: 55% !important;
            }

/* About  */

            .about-container {
                display: flex;
                justify-content: space-between;
                align-items: flex-start;
                gap: 20px !important;
            }

            .aboutUs {
                max-width: 500px;
                margin-top: 0;
                margin: 0 !important;
            }

            .aboutUs p{
                font-size: 0.8rem !important;
            }

            .small-card {
                width: 40%;
                margin-top: -10%; 
                padding: 20px; 
                position: relative; 
                top: -10%;
                bottom: -10%;
                height: 5% !important;
            }

            .small-card h2 {
                font-size: 1rem !important;
                margin: 0 !important;
            }

            .small-card p {
                font-size: 0.6rem !important;
                margin: 0 !important;
            }

            .small-card label {
                font-size: 0.6rem !important; 
            }

            .small-card input{
                font-size: 0.7rem;
                padding: 1px 2px;
            }

            .small-card select{
                font-size: 0.7rem; 
                padding: 1px 2px;
            }
/* test */
            .advantage-container h1{
                font-size: 1.7rem !important;
            }

            .advantage-card{
                max-height: 400px !important;
            }


            .advantage-container {
                position: relative;
                display: flex;
                justify-content: space-evenly;
                align-items: center;
                gap: 20px !important;
            }

            .advantage-container .image {
                height: 100%;
                object-fit: cover; 
            }

            .advantage-container h1 {
                top: 10%;
                font-size: 2.5rem; 
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .advantage {
                top: 20%; 
                padding: 0 10%;
                display: flex;
                justify-content: space-evenly; 
                align-items: center;
                gap: 0.8rem;  
                margin: 0 !important; 
            }

            .advantage-card {
                width: 30%; 
                height: 250px !important;
                margin-bottom: 30px;
                gap: 20px;
            }

            .advantage-card img {
                width: 80px; 
                height: 80px;
                object-fit: cover;

            }

            .card-body h3 {
                font-size: 1.3rem; 
            }

            .card-body p {
                font-size: 0.8rem; 
                margin-top: 15px;
            }

        /* Command */
            .features-container img{
                width: 80px; 
                height: 80px;
            }

            .features-container h3{
                font-size: 1.25rem;
            }

            .features-container p{
                font-size: 0.8rem;
            }

        /* Value*/
            .value-container{
                position: relative;
                display: flex;
                
            }

            .value-item img{
                width: 40px;
                height: 40px;
            }

            .value-item{
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
                display: flex;
                justify-content: center;
                align-items: center;
                margin-bottom: 30px !important;
            }

        /* Reference */
            .reference-container h1{
                font-size: 1.5rem ;
            }

        /* Explore */

            .explore-container .card{
                width: 25% !important;
                height: auto
            }

        }

    </style>
@endsection

@section('navbar')
    @include('component.navbar')
@endsection

@section('content')
    <div class="container-fluid p-0 mb-3">
        <div class="img-container">
            <img src="{{asset('assets/UpperPage.jpeg')}}" alt="" class="image object-fit-cover">
            <div class="text-overlay first text-white">Cybersecurity Made Simple with Sangfor Cyber Command</div>
            <div class="text-overlay second text-white">Simplify your cybersecurity with Sangfor Cyber Command's user-friendly interface and comprehensive threat protection</div>
            <button class="text-overlay third btn text-white fw-bold">FREE TRIAL</button>
        </div>

        <div class="about-container gap-3 position-relative d-flex justify-content-center align-items-center">
            <img src="{{asset('assets/aboutUs.jpeg')}}" alt="" class="image object-fit-cover w-100" style="height: auto;">
            
            <div class="position-absolute d-flex w-100 justify-content-between align-items-center" style="top: 15%; padding: 0 10%;">
        
            <div class="aboutUs" style="max-width: 500px;">
                <h2 class="fw-bolder fs-1" style="color: #293660;">About Sangfor Cyber Command</h2>
                <p>Sangfor Cyber Command falls into Network Detection & Response (NDR) Solutions which is a comprehensive security management platform designed to protect businesses from cyber threats.</p>
                <p>It provides a range of security solutions such as threat detection, incident response, and compliance management. With Sangfor Cyber Command, organizations can monitor their network traffic, analyze security events, and respond to incidents quickly and efficiently.</p>
                <p>The platform uses advanced machine learning algorithms and big data analytics to identify and prevent cyber-attacks before they cause damage.  It also offers a user-friendly dashboard that enables businesses to track their security posture in real-time and make informed decisions based on the insights provided.</p>
                <p>Overall, Sangfor Cyber Command is a powerful tool for businesses looking to strengthen their cybersecurity defenses and safeguard their assets from modern-day threats. </p>
            </div>

            <div class="card d-flex small-card">
                <div class="card-body">
                    <h2 class="fw-bold fs-4" style="color: #293660;">Dapatkan Free Trial selama 1 bulan,</h2>
                    <p class="text-secondary fs-4 mb-4">analisa keamanan network anda dan lihat hasilnya!</p>
                    <form action="{{route('thanks.page')}}">
                        <div class="mb-3 d-flex align-items-center gap-5">
                            <div class="me-3">
                                <label for="firstname" class="form-label">First Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control w-100" id="firstname" placeholder="First Name">
                            </div>

                            <div >
                                <label for="lastname" class="form-label">Last Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control w-100" id="lastname" placeholder="Last Name">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="corporateEmail" class="form-label">Corporate Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control w-100" id="corporateEmail" placeholder="email@gmail.com">
                        </div>

                        <div class="mb-3">
                            <label for="jobTitle" class="form-label">Job Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control w-100" id="jobTitle" placeholder="Your Job">
                        </div>

                        <div class="mb-3">
                            <label for="companyName" class="form-label ">Company Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control w-100" id="companyName" placeholder="Your Company">
                        </div>

                        <div class="mb-3 d-flex flex-column">
                            <label for="industry" class="form-label ">Industry <span class="text-danger">*</span></label>
                            <select name="industry"  class="form-control w-100" id="industry" placeholder="Select Industry">
                                <option value=""disabled selected>Select Industry</option>
                                <option value="">A</option>
                                <option value="">B</option>
                                <option value="">C</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label ">Phone Number <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control w-100" id="phone" placeholder="Your Number">
                        </div>

                        <div class="mb-3 d-flex align-items-center">
                            <input type="checkbox" id="agreement" class="me-2 mb-4">
                            <p class="" style="max-width : 478px; color: #6D6D6D;">click this box to agree to be contacted by  our team and
                            get great deals on Sangfor for Helios!</p>
                        </div>

                        <div class="mb-3 d-flex justify-content-center ">
                            <button style="background-color: #04BE02; width: 200px;" class="btn text-white fw-bolder shadow">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="advantage-container position-relative mb-5">
        <img src="{{asset('assets/advantages.jpeg')}}" alt="" class="image object-fit-cover w-100">

        <h1 class="position-absolute text-center fw-bolder text-white mb-3" style="top: 5%; left: 50%; transform: translate(-50%, -50%);">
            Sangfor Cyber Command Advantages
        </h1>

        <div class="advantage  position-absolute d-flex w-100 justify-content-evenly align-items-center mb-3" style="top: 10%; padding: 0 5%;" >
            <div class="card advantage-card" style="width: 600px; height:500px;">
                <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                    <img src="{{asset('assets/threat.jpeg')}}" alt="" class="rounded-circle">
                    <h3 class="fw-bold mt-2" style="color: #293660;">Advanced Threat Detection</h3>
                    <p>Sangfor Cyber Command offers advanced threat detection capabilities that can help users identify and respond to potential security threats in real-time. This includes identifying and blocking malware, ransomware, and other types of cyber threats.</p>
                </div>
            </div>
            <div class="card advantage-card" style="width: 600px; height: 500px;">
                <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                    <img src="{{asset('assets/network.jpeg')}}" alt="" class="rounded-circle">
                    <h3 class="fw-bold mt-2" style="color: #293660;">Network Visibility and Control</h3>
                    <p>Sangfor Cyber Command provides users with visibility and control over their network infrastructure. This includes monitoring network traffic, controlling access to resources, and managing network policies.</p>
                </div>
            </div>
        </div>

        <div class="advantage position-absolute d-flex w-100 justify-content-evenly align-items-center mt-5" style="top: 50%; padding: 0 5%;">
            <div class="card advantage-card" style="width: 600px; height:500px;">
                <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                    <img src="{{asset('assets/cloud.jpeg')}}" alt="" class="rounded-circle">
                    <h3 class="fw-bold mt-2" style="color: #293660;">Cloud Security</h3>
                    <p>Sangfor Cyber Command offers cloud security solutions that can help users secure their cloud-based applications and infrastructure. This includes protecting against cloud-specific threats like data breaches, account hijacking, and insider threats.</p>
                </div> 
            </div>
            <div class="card advantage-card" style="width: 600px; height:500px;">
                <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                    <img src="{{asset('assets/security.jpeg')}}" alt="" class="rounded-circle">
                    <h3 class="fw-bold mt-2" style="color:#293660;">Comprehensive Security Management</h3>
                    <p>Sangfor Cyber Command provides users with a comprehensive security management platform that can help them manage and monitor their entire security infrastructure from a single console. This includes managing security policies, tracking security events, and generating reports.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="features-container mb-5">
        <h1 class="text-center mb-5" style="color: #293660;">Sangfor Cyber Command Features</h1>
        <div class="d-flex align-items-center justify-content-around">
            <div class="d-flex justify-content-center align-items-center flex-column">
                <img src="{{asset('assets/retinol.jpeg')}}" alt="" class="rounded-circle">
                <h3 class="mb-2">Threat Intelligence</h3>
                <p style="max-width:300px;" class="text-center">Advanced AI algorithms and machine learning provide comprehensive threat intelligence to stay ahead of the latest cyber threats.</p>
            </div>

            <div class="d-flex justify-content-center align-items-center flex-column">
                <img src="{{asset('assets/shop.jpeg')}}" alt="" class="rounded-circle">
                <h3 class="mb-2">Real Time Detections</h3>
                <p style="max-width:300px;" class="text-center">Real-time alert system provides instant notification of potential security incidents.</p>
            </div>

            <div class="d-flex justify-content-center align-items-center flex-column">
                <img src="{{asset('assets/investigate.jpeg')}}" alt="" class="rounded-circle">
                <h3 class="mb-2">Threats Investigation</h3>
                <p style="max-width:300px;" class="text-center">In-depth Threat investigation capabilities identify the root cause of security incidents and take appropriate action to prevent future occurrences.</p>
            </div>
        </div>

        <div class="d-flex align-items-center justify-content-evenly">
            <div class="d-flex justify-content-center align-items-center flex-column">
                <img src="{{asset('assets/hacker.jpeg')}}" alt="" class="rounded-circle">
                <h3 class="mb-2">Comprehensive
                Security Solutions</h3>
                <p style="max-width:300px;" class="text-center">In-depth Threat investigation capabilities identify the root cause of security incidents and take appropriate action to prevent future occurrences.</p>
            </div>

            <div class="d-flex justify-content-center align-items-center flex-column">
                <img src="{{asset('assets/chat.jpeg')}}" alt="" class="rounded-circle">
                <h3 class="mb-2">Rapid Response</h3>
                <p style="max-width:300px;" class="text-center">Tight integration with network and endpoint security solutions enables quick response to potential security incidents, minimizing the impact of any attacks.</p>
            </div>
        </div>
    </div>


    <div class="value-container position-relative">
        <img src="{{asset('assets/Value.jpeg')}}" alt="" class="image object-fit-cover">
        <h1 class="position-absolute fw-bolder text-center" style="top: 20%; left: 50%; transform: translate(-50%, -50%); color: #293660; max-width:650px;">Sangfor Cyber Command's Value to Customers</h1>

        <div class="value-item text-center position-absolute d-flex justify-content-center align-items-center gap-5 mb-3" style="top: 40%; left: 50%; transform: translate(-50%, -50%);">
            <img src="{{asset('assets/Checklist.jpeg')}}" alt="" class="me-3 rounded-circle">
            <h3 class="fs-5 text-secondary text-start" style="width: 600px;">
                Detect known and unknown threats
            </h3>
        </div>

        <div class="value-item  text-center position-absolute d-flex justify-content-center align-items-center gap-5 mb-3" style="top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <img src="{{asset('assets/Checklist.jpeg')}}" alt="" class="me-3 rounded-circle">
            <h3 class="fs-5 text-secondary text-start" style="width: 600px;">
                Much better visibility of security posture of the
                entire infrastructure
            </h3>
        </div>

        <div class="value-item  text-center position-absolute d-flex justify-content-center align-items-center gap-5 mb-3"style="top: 60%; left: 50%; transform: translate(-50%, -50%);"> 
            <img src="{{asset('assets/Checklist.jpeg')}}" alt="" class="me-3 rounded-circle">
            <h3 class="fs-5 text-secondary text-start" style="width: 600px;">
                Business Impact Analysis helps IT to understand
                what is already compromised and what needs
                to be prioritized
            </h3>   
        </div>

        <div class="value-item  text-center position-absolute d-flex justify-content-center align-items-center gap-5 mb-3"style="top: 70%; left: 50%; transform: translate(-50%, -50%);"> 
            <img src="{{asset('assets/Checklist.jpeg')}}" alt="" class="me-3 rounded-circle">
            <h3 class="fs-5 text-secondary text-start" style="width: 600px;">
                Faster Response to improve overall security control
            </h3>
        </div>

        <div class="value-item  text-center position-absolute d-flex justify-content-center align-items-center gap-5 mb-3"style="top: 80%; left: 50%; transform: translate(-50%, -50%);"> 
            <img src="{{asset('assets/Checklist.jpeg')}}" alt="" class="me-3 rounded-circle">
            <h3 class="fs-5 text-secondary text-start" style="width: 600px;">
                Much more cost effective than other solutions such as SIEM
            </h3>
        </div>        
    </div>

    <div class="reference-container bg-light mb-5">
        <div class="d-flex justify-content-center">
            <div class="border w-50 d-flex justify-content-center align-items-center mb-4" style="background-color: #293660;">
                <h1 class="text-white">Cyber Command Customers Reference</h1>
            </div>
        </div>

        <div class="d-flex justify-content-around align-items-center ">
            <img src="{{asset('assets/J&T.jpeg')}}" alt="" class="reference">
            <img src="{{asset('assets/JasaRaharja.jpeg')}}" alt="" class="reference mb-3 pb-3">
            <img src="{{asset('assets/okBank.jpeg')}}" alt="" class="reference">
            <img src="{{asset('assets/SamudraIndo.jpeg')}}" alt="" class="reference">
        </div>
    </div>

    <div class="explore-container mb-5 pb-5">
        <h1 style="color: #293660;" class="text-center fw-bolder mt-4">Explore Sangfor Cyber Command with Helios</h1>
        <h4 class="text-center fw-lighter text-muted mb-5 pb-5">Helios Informatika Nusantara as Sangfor Distributor will provide</h4>

        <div class="d-flex justify-content-evenly align-items-stretch p-0">
            <div class="card shadow-lg" style="width: 400px; height:auto;">
                <div class="card-body d-flex justify-content-center align-items-center flex-column">
                    <img src="{{asset('assets/NDR.jpeg')}}" alt="" class="rounded-circle mb-2" style="width: 100px; height:100px;">
                    <h3 class="text-center" style="color: #293660;">NDR Implementation</h3>
                </div>
            </div>
            <div class="card shadow-lg" style="width: 400px; height:auto;">
                <div class="card-body d-flex justify-content-center align-items-center flex-column">
                    <img src="{{asset('assets/Incident.jpeg')}}" alt="" class="rounded-circle mb-2" style="width: 100px; height:100px;">
                    <h3 class="text-center" style="color: #293660;">Incident Response and Threat Hunting</h3>
                    
                </div>
            </div>
            <div class="card shadow-lg" style="width: 400px; height:300px;">
                <div class="card-body d-flex justify-content-center align-items-center flex-column">
                    <img src="{{asset('assets/Device.jpeg')}}" alt="" class="rounded-circle mb-2" style="width: 100px; height:100px;">
                    <h3 class="text-center" style="color: #293660;">Device Security Maintenance</h3>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('footer')
        @include('component.footer')
@endsection
