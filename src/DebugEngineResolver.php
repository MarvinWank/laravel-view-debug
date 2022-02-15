<?php

namespace Pixelfear\ViewDebug;

use Illuminate\View\Engines\EngineResolver;

class DebugEngineResolver extends EngineResolver
{
    protected EngineResolver $resolver;

    public function __construct(EngineResolver $resolver)
    {
        $this->resolver = $resolver;
    }

    public function register($engine, $resolver)
    {
        $this->resolver->register($engine, $resolver);
    }

    public function resolve($engine): DebugEngine
    {
        return new DebugEngine($this->resolver->resolve($engine));
    }
}
