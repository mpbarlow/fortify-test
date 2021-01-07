<html lang="en">
  <body>
    logged in as {{ Auth::user()->name }}!
    <form action="{{ route('logout') }}" method="post">
      @csrf
      <button>Log Out</button>
    </form>
  </body>
</html>