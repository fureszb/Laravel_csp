<form action="/api/kategoria/delete/{id}" method="POST">
    {{csrf_field()}}
    {{method_field('DELETE')}}

    <button type="submit" class="btn btn-danger">Törlés</button>
</form>