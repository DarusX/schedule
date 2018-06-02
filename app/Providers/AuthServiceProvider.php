<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Course::class => CoursePolicy::class,
        Professor::class => ProfessorPolicy::class,
        Classroom::class => ClassroomPolicy::class,
        Period::class => PeriodPolicy::class,
        Language::class => LanguagePolicy::class,
        Hour::class => HourPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::resource('course', \App\Policies\CoursePolicy::class);
        Gate::resource('professor', \App\Policies\ProfessorPolicy::class);
        Gate::resource('classroom', \App\Policies\ClassroomPolicy::class);
        Gate::resource('period', \App\Policies\PeriodPolicy::class);
        Gate::resource('language', \App\Policies\LanguagePolicy::class);
        Gate::resource('hour', \App\Policies\HourPolicy::class);


    }
}
