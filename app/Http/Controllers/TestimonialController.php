<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    // Display the list of testimonials
    public function index()
    {
        $testimonials = Testimonial::all(); // Fetch all testimonials
        return view('testimonials.index', compact('testimonials'));
    }

    // Show a single testimonial
    public function show($id)
    {
        $testimonial = Testimonial::findOrFail($id); // Find the testimonial by ID
        return view('testimonials.show', compact('testimonial'));
    }
}
