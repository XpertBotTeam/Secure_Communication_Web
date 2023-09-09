@extend('layout.layout')
    @content('registerpage')
        
            <div class="container">
                 <div class="box form-box">
                  <header>Sign Up</header>
                  <from method="POST" action="{{ url('register') }}">                         
                  <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <label for="username" class="col-md-4 control-label">Username</label>
                    <div class="col-md-6">
                      <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required>
                     @if ($errors->has('username'))
                    <span class="help-block">
                    <strong>{{ $errors->first('username') }}</strong>
                     </span>
                     @endif
                    </div>
                    </div>
            
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required />
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required />
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required />
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required />
                </div>

                <div class="field">

                    <input type="submit" class="btn" name="submit" value="Register" required />
                </div>
                <div class="links">
                    Already a member? <a href="/login">Sign In</a>
                </div>
            </form>
        </div>
      
    </div>
    @endsection