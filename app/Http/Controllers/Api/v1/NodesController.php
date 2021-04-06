<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\NodeResource;
use Illuminate\Http\Request;
use App\Models\Node;

class NodesController extends Controller
{
    //
    public function show($id,$type)
    {
       
        if($type == "children"){
            $node = Node::with(['childs_recursive'])->where('id',$id)->paginate();
        }elseif($type == "parents"){
            $node = Node::with(['parents_recursive'])->where('id',$id)->paginate(); //findOrFail($id)
        }else{
            return response()->json(['message' => 'Type not found'], 404);
        }

        return new NodeResource($node);
    }
    
}
