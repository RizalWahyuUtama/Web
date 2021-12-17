@include('header')

<div class="container mt-5">
  <form action="{{url('simpanpesanan')}}" method="post">
    @csrf  
      <div class="form-group">
        <label>Nama:</label>
        <input type="text" class="form-control" name="nama" placeholder="Silahkan Input Nama">
      </div>

      <div class="form-group">
        <label>Meja:</label>
        <input type="text" class="form-control" name="meja" placeholder="Silahkan Input Nama">
      </div>

      <center><h2>Daftar Menu</h2></center>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Nama Makanan</th>
            <th scope="col">Harga</th>
            <th scope="col"></th>
            <th scope="col">Nama Minumam</th>
            <th scope="col">Harga</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="col">Soto</th>
            <td>Rp: 5000,-</td>
            <td>
              <div class="form-check">
              <input type="checkbox" value="Soto" name="menu1">
            </div>
          </td>

            <th scope="col">Kopi</th>
            <td>Rp: 3000,-</td>
            <td>
              <div class="form-check">
              <input type="checkbox" value="Kopi" name="menu2">
            </div>
          </td>
          
        </tr>
          <tr>
            <th scope="col">Gado-Gado</th>
            <td>Rp: 10.000,-</td>
            <td>
              <div class="form-check">
                <input type="checkbox" value="Gado-Gado" name="Menu3">
            </td>
            <th scope="col">jahe</th>
            <td>Rp: 3000,-</td>
            <td>
              <div class="form-check">
                <input type="checkbox" value="Jahe" name="menu4">
            </td>
          </tr>
          <tr>
            <th scope="col">Mie Goreng</th>
            <td>Rp: 10.000,-</td>
            <td>
              <div class="form-check">
                <input type="checkbox" value="Ayam Krispi" name="menu5">
            </td>
            <th scope="col">Jus Jeruk</th>
            <td>Rp: 8000,-</td>
            <td>
              <div class="form-check">
                <input type="checkbox" value="Jus Jambu" name="menu6">
            </td>
          </tr>
        </tbody>
      </table>
      <input type="submit" value="Simpan" class="btn btn-lg btn-success">
    </form>
</div>


      {{-- <div class="form-check mt-5">
        <label class="form-check-label" for="defaultCheck1">Nama</label>
        <label class="form-check-label" for="defaultCheck2">Rp: 5000,-</label>
        <input type="checkbox" value="Mie" id="menu1">
      </div>
      <div class="form-check">
        <label class="form-check-label" for="defaultCheck3">Nama2</label>
        <label class="form-check-label" for="defaultCheck4">Rp: 5000,-</label>
        <input type="checkbox" value="telur" id="menu2">
      </div>
      <div class="form-check">
        <label class="form-check-label" for="defaultCheck5">Nama3</label>
        <label class="form-check-label" for="defaultCheck6">Rp: 5000,-</label>
        <input type="checkbox" value="Ayam" id="menu3">
      </div> --}}
        

  
@include('footer')