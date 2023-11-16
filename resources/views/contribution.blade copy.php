<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
 
<!-- resources/views/contribution.blade.php -->
<div class="container">
  <!-- Content here -->


            <h1 class="fbm-hero-title">Copy Text using JavaScript</h1>
            <div class="fbm-copy-btn-wrapper">
                <button id="fbm-copy-btn">Copy</button>
                <span class="fbm-copied-message"></span>
            </div>
            <p id="fbm-text">
               <h2> {{$description}}</h2>
               <h4> {{$contributions_channel}}</h4>

                {{-- Loop through contributions --}}
                @foreach ($contributions as $name => $amount)
                    {{ $loop->iteration }} {{ $name }} {{ $amount }}<br>
                @endforeach
                {{-- End loop --}}
                
            </p>
            

<textarea name="fbm-test-paste" id="fbm-test-paste" cols="30" rows="10" placeholder="Paste here or press 'ctrl + v'"></textarea>
<div>
<script>
    document.querySelector('#fbm-copy-btn').addEventListener('click', e => {
        var text = document.querySelector('p#fbm-text').innerText;
        window.navigator.clipboard.writeText(text).then(x => {
            document.querySelector('.fbm-copied-message').innerHTML = 'Copied to Clipboard';
            setTimeout(() => {
                document.querySelector('.fbm-copied-message').innerHTML = '';
            }, 5000);
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>