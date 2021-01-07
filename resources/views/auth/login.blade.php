<html lang="en">
  <body>
    <form action="{{ route('login') }}" method="post">
      @csrf

      <div>
        <label for="">Email</label>
        <input type="email" name="email">
      </div>

      <div>
        <label for="">Password</label>
        <input type="password" name="password">
      </div>

      <button>Log in</button>
    </form>
  </body>
</html>