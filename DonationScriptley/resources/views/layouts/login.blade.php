<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins&display=swap');

      * {
          padding: 0;
          margin: 0;
          box-sizing: border-box
      }

      body {
          background-color: #eee;
          height: 100vh;
          font-family: 'Poppins', sans-serif;
          background: linear-gradient(to top, #fff 10%, rgba(93, 42, 141, 0.4) 90%) no-repeat
      }

      .wrapper {
          max-width: 500px;
          border-radius: 10px;
          margin: 50px auto;
          padding: 30px 40px;
          box-shadow: 20px 20px 80px rgb(206, 206, 206)
      }

      .h2 {
          font-family: 'Kaushan Script', cursive;
          font-size: 3.5rem;
          font-weight: bold;
          color: #400485;
          font-style: italic
      }

      .h4 {
          font-family: 'Poppins', sans-serif
      }

      .input-field {
          border-radius: 5px;
          padding: 5px;
          display: flex;
          align-items: center;
          cursor: pointer;
          border: 1px solid #400485;
          color: #400485
      }

      .input-field:hover {
          color: #7b4ca0;
          border: 1px solid #7b4ca0
      }

      input {
          border: none;
          outline: none;
          box-shadow: none;
          width: 100%;
          padding: 0px 2px;
          font-family: 'Poppins', sans-serif
      }

      .fa-eye-slash.btn {
          border: none;
          outline: none;
          box-shadow: none
      }

      a {
          text-decoration: none;
          color: #400485;
          font-weight: 700
      }

      a:hover {
          text-decoration: none;
          color: #7b4ca0
      }

      .option {
          position: relative;
          padding-left: 30px;
          cursor: pointer
      }

      .option label.text-muted {
          display: block;
          cursor: pointer
      }

      .option input {
          display: none
      }

      .checkmark {
          position: absolute;
          top: 3px;
          left: 0;
          height: 20px;
          width: 20px;
          background-color: #fff;
          border: 1px solid #ddd;
          border-radius: 50%;
          cursor: pointer
      }

      .option input:checked~.checkmark:after {
          display: block
      }

      .option .checkmark:after {
          content: "";
          width: 13px;
          height: 13px;
          display: block;
          background: #400485;
          position: absolute;
          top: 48%;
          left: 53%;
          border-radius: 50%;
          transform: translate(-50%, -50%) scale(0);
          transition: 300ms ease-in-out 0s
      }

      .option input[type="radio"]:checked~.checkmark {
          background: #fff;
          transition: 300ms ease-in-out 0s;
          border: 1px solid #400485
      }

      .option input[type="radio"]:checked~.checkmark:after {
          transform: translate(-50%, -50%) scale(1)
      }

      .btn.btn-block {
          border-radius: 20px;
          /* background-color: #400485; */
          background-color: #126132;
          color: #fff
      }

      .btn.btn-block:hover {
          background-color: #9a5f3e;
          color: #fff
      }

      @media(max-width: 575px) {
          .wrapper {
              margin: 10px
          }
      }

      @media(max-width:424px){
      .wrapper {
        padding: 30px 10px;
        margin: 5px
    }

    .option {
        position: relative;
        padding-left: 22px
    }

    .option label.text-muted {
        font-size: 0.95rem
    }

    .checkmark {
        position: absolute;
        top: 2px
    }

    .option .checkmark:after {
        top: 50%
    }

    #forgot {
        font-size: 0.95rem
    }
}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body>
    <div class="wrapper bg-white">
        <div class="h2 text-center">
            <img src="{{asset('/custom/img/logo.png')}}" alt="" srcset="">
        </div>
        <div class="h4 text-muted text-center pt-2">Enter your login details</div>
        <form class="form pt-3" id="login-form" action="{{route('login')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="email" class="text-success">Email:</label><br>
                <input type="email" style="border-color:#b2866d" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password" class="text-success">Password:</label><br>
                <input type="password" style="border-color:#b2866d" name="password" id="password" class="form-control">
            </div>
            <div class="d-flex align-items-start">
                <!-- <div class="remember"> <label class="option text-muted"> Remember me <input type="radio" name="radio"> <span class="checkmark"></span> </label> </div> -->
                <!-- <div class="ml-auto"> <a href="#" id="forgot">Forgot Password?</a> </div> -->
            </div> <button class="btn btn-block text-center my-3">Log in</button>
            <!-- <div class="text-center pt-3 text-muted">Not a member? <a href="#">Sign up</a></div> -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </div>
</body>
</html>