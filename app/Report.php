<?php

namespace App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Report extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date', 'description', 'status', 'reward', 'code_qr',
    ];
    
    public function location()
    {
        return $this->belongsTo('App\Location','last_location_id');
    }

    public function pet()
    {
        return $this->belongsTo('App\Pet');
    }

    public static function getDataReports($parameters = array(), $paginate = FALSE, $numPerItem = 10, $path = 'mascotas/perdidos')
    {
        $data = [];
        $status = (isset($parameters['status'])) ? $parameters['status'] : FALSE;
        $userId = (isset($parameters['userid'])) ? $parameters['userid'] : FALSE;
        $user= Auth::user();
        if($status) 
            $reports = Report::where('status',$status)->orderBy('id', 'desc')->limit($numPerItem)->get();
        else
            $reports = Report::orderBy('id', 'desc')->limit($numPerItem)->get();            
        if (!empty($reports)) {            
            foreach ($reports as $report) {
                if($user && $user->id!=$report->pet->owner_id) continue;
                $date_time=explode(' ',$report->date);
                $report_date=$date_time[0];
                $report_date=date("d M Y", strtotime($report_date));
                $address=str_replace("Distrito de ","",$report->location->address);
                $address=str_replace("Provincia de ","",$address);
                $data[] = [
                    'id' => $report->id,
                    'status' => $report->status,
                    'pet_id'=>$report->pet->id,
                    'name' => $report->pet->name, 
                    'race' => $report->pet->race, 
                    'gender' => $report->pet->gender, 
                    'date' => $report_date." ".$date_time[1],
                    'address' => $address, 
                    'description' => $report->pet->description, 
                    'image' => $report->pet->photos[0]->url
                ];
            }
        }

        return ['data' => $data, 'paginate' => $paginate];
    }
    

    public static function getPublicReports($parameters = array(), $paginate = FALSE, $numPerItem = 10, $path = 'mascotas/perdidos')
    {
        $data = [];
        $status = (isset($parameters['status'])) ? $parameters['status'] : FALSE;
        $userId = (isset($parameters['userid'])) ? $parameters['userid'] : FALSE;
        $user= Auth::user();
        if($status) 
            $reports = Report::where('status',$status)->orderBy('id', 'desc')->limit($numPerItem)->get();
        else
            $reports = Report::orderBy('id', 'desc')->limit($numPerItem)->get();            
        if (!empty($reports)) {            
            foreach ($reports as $report) {
                $date_time=explode(' ',$report->date);
                $report_date=$date_time[0];
                $report_date=date("d M Y", strtotime($report_date));
                $address=str_replace("Distrito de ","",$report->location->address);
                $address=str_replace("Provincia de ","",$address);
                $data[] = [
                    'id' => $report->id,
                    'status' => $report->status,
                    'pet_id'=>$report->pet->id,
                    'name' => $report->pet->name, 
                    'race' => $report->pet->race, 
                    'gender' => $report->pet->gender, 
                    'date' => $report_date." ".$date_time[1],
                    'address' => $address, 
                    'description' => $report->pet->description, 
                    'image' => $report->pet->photos[0]->url
                ];
            }
        }

        return ['data' => $data, 'paginate' => $paginate];
    }

    public static function getDataReport($id)
    {
        $data = [];
        $user= Auth::user();
        $report = Report::where('id',$id)->first();
        $user = User::where('id',$report->pet->owner_id)->first();        
        $date_time=explode(' ',$report->date);
        $report_date=$date_time[0];
        $report_date=date("d M Y", strtotime($report_date));        
        $address=str_replace("Distrito de ","",$report->location->address);
        $address=str_replace("Provincia de ","",$address);
        $data = [
            'id' => $report->id,
            'status' => $report->status,
            'pet_id'=>$report->pet->id,
            'user_phone'=>$user->phone,
            'name' => $report->pet->name, 
            'race' => $report->pet->race, 
            'gender' => $report->pet->gender, 
            'reward' => $report->reward,
            'date' => $report_date." ".$date_time[1],
            'address' => $address, 
            'description' => $report->pet->description, 
            'image' => $report->pet->photos[0]->url
        ];
//        var_dump($report);exit;
        return $data;
    }
}
