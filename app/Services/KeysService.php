<?php

namespace App\Services;

class KeysService
{
    public const KEYS_FILE = 'keys.txt';

    private static function loadKeys(): ?array
    {
        if (!file_exists(base_path(self::KEYS_FILE))) {
            return null;
        }

        return unserialize(file_get_contents(base_path(self::KEYS_FILE))) ?: null;
    }

    public static function setKeys(string $publicKey, string $privateKey): void
    {
        file_put_contents(base_path(self::KEYS_FILE), serialize(compact('publicKey', 'privateKey')));
    }

    public static function getPublicKey(): ?string
    {
        return optional(self::loadKeys())['publicKey'];
    }

    public static function getPrivateKey(): ?string
    {
        return optional(self::loadKeys())['privateKey'];
    }

    public static function keysExist(): bool
    {
        return !is_null(static::getPublicKey()) && !is_null(static::getPrivateKey());
    }
}
