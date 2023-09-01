<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Emergency;
use Illuminate\Support\Facades\Log;


class DeleteEmergencyData implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $emergency;

    public function __construct(Emergency $emergency)
    {
        $this->emergency = $emergency;
    }

    public function handle()
{
    $emergency = $this->emergency;

    try {
        // Attempt to delete the emergency data
        $emergency->delete();
    } catch (\Exception $e) {
        // Log the error
        \Log::error('Error deleting emergency data: ' . $e->getMessage());

        // Re-queue the job
        return $this->release(60);
    }
}

    
}
