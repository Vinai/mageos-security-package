<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\ReCaptchaFrontendUi\Model;

use Magento\Framework\Phrase;

/**
 * Represents general ReCaptcha frontend configuration
 *
 * @api
 */
interface FrontendConfigInterface
{
    /**
     * Get google recaptcha public key
     * @return string
     */
    public function getPublicKey(): string;

    /**
     * Get google recaptcha private key
     * @return string
     */
    public function getPrivateKey(): string;

    /**
     * @return bool
     */
    public function isInvisibleRecaptcha(): bool;

    /**
     * Get reCaptcha type
     * @return string
     */
    public function getType(): string;

    /**
     * Return true if enabled on frontend
     * @return bool
     */
    public function isFrontendEnabled(): bool;

    /**
     * Get size
     * @return string
     */
    public function getSize(): string;

    /**
     * Get theme
     * @return string
     */
    public function getTheme(): ?string;

    /**
     * Get language code
     * @return string
     */
    public function getLanguageCode(): string;

    /**
     * Get position
     * @return string
     */
    public function getPosition(): ?string;

    /**
     * Get minimum frontend score
     * @return float
     */
    public function getMinScore(): float;

    /**
     * Get error message
     * @return Phrase
     */
    public function getErrorMessage(): Phrase;
}
