<html lang="en">
  <body>
    <form action="{{ route('two-factor.login') }}" method="post">
      @csrf

      <div>
        {!! App\Models\User::first()->twoFactorQrCodeSvg() !!}
      </div>

      <div>
        <label for="">Code</label>
        <input type="text" name="code">
      </div>

      <button>Submit code</button>
    </form>
  </body>
</html>