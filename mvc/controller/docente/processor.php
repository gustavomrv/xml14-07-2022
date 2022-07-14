<?php

class XSLTProcessor {
    /* Methods */
    public getParameter(string $namespace, string $name): string|false
    public getSecurityPrefs(): int
    public hasExsltSupport(): bool
    public importStylesheet(object $stylesheet): bool
    public registerPHPFunctions(array|string|null $functions = null): void
    public removeParameter(string $namespace, string $name): bool
    public setParameter(string $namespace, string $name, string $value): bool
    public setParameter(string $namespace, array $options): bool
    public setProfiling(?string $filename): bool
    public setSecurityPrefs(int $preferences): int
    public transformToDoc(object $document, ?string $returnClass = null): DOMDocument|false
    public transformToURI(DOMDocument $doc, string $uri): int
    public transformToXml(object $document): string|null|false
    }

?>