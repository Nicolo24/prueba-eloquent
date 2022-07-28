
$padres=\App\Models\padre::all()  

$hijos=\App\Models\hijo::all()  

$hijo1=\App\Models\hijo::where('id','1')->first()

$hijo2=\App\Models\hijo::where('id','2')->first()

$hijo1=\App\Models\hijo::where('nombre','=','Nicolas')->first()

$hijo2=\App\Models\hijo::where('nombre','=','Fernando')->first()

print($hijo1->nombre.' '.$hijo1->padre->apellido)