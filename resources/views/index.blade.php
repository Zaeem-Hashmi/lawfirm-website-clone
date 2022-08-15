<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Law Firm website</title>

    {{-- custom style sheet added  --}}
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">

    {{-- bootstrap css added  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <style>
        .landing::before{
             content: " ";
             background-image: url("{{URL::asset('images/bg1.jpg')}}");
             display: block;
             position: absolute;
             width: 100%;
             height: 600px;
             background-repeat: no-repeat;
             background-size: cover
           }
           .footer{
            background:#00315b;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
           }
    </style>

  </head>
</head>
<body>
    {{-- nav section html starts --}}
    <nav class="navbar navbar-expand-lg bg-light shadow" style="position: sticky; top: 0px;display: block;z-index: 10;">
        <div class="container px-5 py-2">
          <div style="width: 40px; height: 40px;" >
            <a class="navbar-brand" href="#"><svg preserveAspectRatio="xMidYMid meet" data-bbox="20 20 160 160" viewBox="20 20 160 160" height="auto" width="100%" xmlns="http://www.w3.org/2000/svg" data-type="color" role="img" aria-labelledby="svgcid--i3raw6r12n5y"><defs><style>#comp-kj8ccgxo svg [data-color="1"] {fill: #41B7C4;}
                #comp-kj8ccgxo svg [data-color="2"] {fill: #00305B;}</style></defs><title id="svgcid--i3raw6r12n5y">Homepage</title>
                    <g>
                        <path d="M180 20L97.391 98.133 20 180V20h160z" fill="#14B199" data-color="1"></path>
                        <path d="M180 180H20V20l78.133 82.609L180 180z" fill="#0B3259" data-color="2"></path>
                    </g>
                </svg>
                <span href="">
                    KNOLL & WALTERS LLP
            </span>
            </a>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item mx-3" style="font-size: 14px">
                <a class="nav-link active" aria-current="page" href="#banner">HOME</a>
              </li>
              <li class="nav-item mx-3" style="font-size: 14px">
                <a class="nav-link active" aria-current="page" href="#practise">PRACTISE AREA</a>
              </li>
              <li class="nav-item mx-3" style="font-size: 14px">
                <a class="nav-link active" aria-current="page" href="#vision">OUR VISION</a>
              </li>
              <li class="nav-item mx-3" style="font-size: 14px">
                <a class="nav-link active" aria-current="page" href="#Attorney">ATTORNEYS</a>
              </li>
              <li class="nav-item mx-3" style="font-size: 14px">
                <a class="nav-link active" aria-current="page" href="#contact">CONTACT</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    {{-- nav section html ends  --}}

    {{-- landing section html starts  --}}
    <section class="landing" id="banner"> 
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5" style="position: relative;background: #00315b93; height: 600px; ">
                    <div class="box text-white">
                        <h1>
                            BOUTIQUE <br>
                            <b>LAW FIRM</b>
                        </h1>
                        <P>Specializing in Commercial Law & <br> Litigation, Insolvency & Fraud</P>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- landing section html ends  --}}

    {{-- Practise area html starts  --}}
    <div class="container-fluid" id="practise">
        <div class="row">
            <div class="col-md-5" style="background: #E7F1F3;">
                <h1 style="color: #00305B" class="text-center ps-5 py-5">
                    <b>
                        PRACTISE
                    </b>
                    <br>
                    AREAS
                </h1>
            </div>
            <div class="col-md-7">
                <div class="row justify-content-around py-5" style="color: #11416a">
                    <div class="col-md-5 py-4">
                        <h3>
                            LITIGATION
                        </h3>
                        <p>
                            I'm a paragraph. Click here to add your own text and edit me. It's easy.
                        </p>
                    </div>
                    <div class="col-md-5 py-4">
                        <h3>
                            BUSINESS
                        </h3>
                        <p>
                            I'm a paragraph. Click here to add your own text and edit me. It's easy.
                        </p>
                    </div>
                    <div class="col-md-5 py-4">
                        <h3>
                            INSOLVENCY
                        </h3>
                        <p>
                            I'm a paragraph. Click here to add your own text and edit me. It's easy.
                        </p>
                    </div>
                    <div class="col-md-5 py-4">
                        <h3>
                            FRAUD
                        </h3>
                        <p>
                            I'm a paragraph. Click here to add your own text and edit me. It's easy.
                        </p>
                    </div>
                    <div class="col-md-5 py-4">
                        <h3>
                            DISPUTE RESOLUTION
                        </h3>
                        <p>
                            I'm a paragraph. Click here to add your own text and edit me. It's easy.
                        </p>
                    </div>
                    <div class="col-md-5 py-4">
                        <h3>
                            TAX

                        </h3>
                        <p>
                            I'm a paragraph. Click here to add your own text and edit me. It's easy.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- practise area html ends  --}}

    {{-- vision section html start  --}}
    <div class="container-fluid py-5" id="vision" style="background: #00305B">
        <p style="font-size: 50px" class="text-light text-center py-4">
            OUR VISION
        </p>
        <p class="w-75 mx-auto text-center text-light py-3 fs-5 px-5">
            I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.
        </p>
        <p class="w-75 mx-auto text-center text-light py-3 fs-5 px-5">
            This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.
        </p>
        <p class="w-75 mx-auto text-center text-light py-3 fs-5 px-5">
            At Wix we’re passionate about making templates that allow you to build fabulous websites and it’s all thanks to the support and feedback from users like you! Keep up to date with New Releases and what’s Coming Soon in Wixellaneous in Support. Feel free to tell us what you think and give us feedback in the Wix Forum.
        </p>
    </div>
    {{-- vision section html ends  --}}

    {{-- image section html start  --}}
    <div class="container-fluid px-0">
        <img src="{{URL::asset('images/bg2.jpg')}}" alt="" width="100%">
    </div>
    {{-- image section html ends  --}}

    {{-- attorney section html start  --}}
    <div class="container-fulid py-5" id="Attorney" style="background:#E7F1F3 ">
        <p style="font-size: 40px; color: #00305B" class="text-center py-5">
            OUR ATTORNEYS
        </p>
        <div class="container w-75 px-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="container">
                        <img src="{{URL::asset("images/person1.jpg")}}" alt="" width="100%">
                        <p class="fs-4 text-center pt-3">
                            AIDEN WALTERS
                        </p>
                        <p class="fs-5 text-center">
                            PARTNER 
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container">
                        <img src="{{URL::asset("images/person2.jpg")}}" alt="" width="100%">
                        <p class="fs-4 text-center pt-3">
                            JULIA KNOLL
                        </p>
                        <p class="fs-5 text-center">
                            PARTNER 
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container">
                        <img src="{{URL::asset("images/person3.jpg")}}" alt="" width="100%">
                        <p class="fs-4 text-center pt-3">
                            JAMES LOPEZ
                        </p>
                        <p class="fs-5 text-center">
                            PARTNER 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- attorn section html ends  --}}

    {{-- contact section  html start  --}}
   <div class="container-fluid footer" id="contact">
    <div class="p-0">
        <p class="fs-1 text-center text-light pt-5">
            Contact Us
          </p>
        <div class="row">
            <div class="col-md-6 offset-md-3 text-light">
                <form action="/contactUs" method="POST">
                    @csrf
                    <div class="my-3">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" name="fname" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="lname" class="form-label">LastName</label>
                        <input type="text" name="lname" class="form-control">
                    </div>
                   <div class="my-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control">
                   </div>
                    <div class="my-3">
                        <label for="sub" class="form-label">Subject</label>
                        <input type="text" name="subject" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea name="message" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="d-flex mt-4 mb-5">
                        <button type="submit" class="btn btn-outline-secondary w-50 text-white">Submit</button>
                        <button type="reset" class="btn btn-outline-secondary w-50 text-white">Reset</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
          
   </div> 
    {{-- contact section html ends  --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>