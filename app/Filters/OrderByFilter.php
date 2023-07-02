<?php

namespace App\Filters;

use Closure;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class OrderByFilter
{
    public function __construct(
        private Request $request
    ) {}

    public function handle(Builder $builder, Closure $next): Builder
    {
        return $next($builder)
            ->when(
                $this->request->order_by,
                fn($query) => $query->orderBy($this->request->order_by, $this->request->direction ?? 'asc')
            );
    }
}
