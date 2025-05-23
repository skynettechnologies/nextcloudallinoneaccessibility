<?php
namespace OCA\NextcloudAllInOneAccessibility\Sections;

use OCP\IL10N;
use OCP\IURLGenerator;
use OCP\Settings\IIconSection;

class AioaAdmin implements IIconSection {
private IL10N $l;
private IURLGenerator $urlGenerator;
    
    public function __construct(IL10N $l, IURLGenerator $urlGenerator) {
        $this->l = $l;
        $this->urlGenerator = $urlGenerator;
    }
    
    public function getIcon(): string {
        return $this->urlGenerator->imagePath('core', 'actions/settings-dark.svg');
    }
    
    public function getID(): string {
        return 'notes';
    }
    
    public function getName(): string {
        return $this->l->t('All in One Accessibility');
    }
    
    public function getPriority(): int {
        return 98;
    }
}