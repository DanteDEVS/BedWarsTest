<?php

namespace test\bw\tests

use pocketmine\block\Block;
use pocketmine\entity\Entity;
use pocketmine\entity\projectile\{Projectile, Throwable};
use pocketmine\event\entity\EntityDamageByChildEntityEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\item\{ItemFactory, Item};
use pocketmine\level\{Position, Level};
use pocketmine\level\particle\HugeExplodeParticle;
use pocketmine\event\entity\ExplosionPrimeEvent;
use pocketmine\level\Explosion;
use pocketmine\nbt\tag\ShortTag;
use pocketmine\network\mcpe\protocol\LevelEventPacket;
use pocketmine\math\RayTraceResult;
use pocketmine\math\Vector3;
use pocketmine\math\AxisAlignedBB;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\network\mcpe\protocol\ActorEventPacket;
use pocketmine\network\mcpe\protocol\LevelSoundEventPacket;
use pocketmine\network\mcpe\protocol\AddActorPacket;
use pocketmine\Player;

class Fireball extends Throwable {
    
    public const NETWORK_ID = self::SMALL_FIREBALL;

    public $width = 0.50;

    public $height = 0.50;
    
    protected $gravity = 0.0;
    
    protected $drag = 0;
    
    protected $life = 0;
    
    protected $damage = 2;
