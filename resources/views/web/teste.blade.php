<h3>Isso é um teste</h3>

@include('cookieConsent::index')



@if(session()->exists('message'))
    <span {{ (session()->get('type') == 'success' ? 'style="color:green;"' : 'style="color:red;"') }}>{{ session()->get('message') }}</span>
@endif

<form action="{{ route('newsletter.store') }}" method="post">
    <div class="form-group">
        <label for="exampleInputEmail">Email</label>
        <input type="email" name="user_email" id="exampleInputEmail" class="form-control" required>
    </div>
    @csrf
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

