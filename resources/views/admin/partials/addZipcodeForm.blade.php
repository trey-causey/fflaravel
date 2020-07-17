<div class="adminEdit">
    <form action="" method="POST">
        @csrf
        @method('POST')
        <input type="text" id="zipcode" name="zipcode">
        {{--<button class="btn-submit" type="submit" name="submit" onclick="checkZip($('#zipcode').val())">Submit New Zip</button>--}}
        <button class="" type="submit" name="submit" onclick="checkZip($('#zipcode').val())">Submit New Zip</button>

    </form>
</div>

<hr>
