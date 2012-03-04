<?php
/**
 * Kunena Component
 * @package Kunena.Template.Default
 * @subpackage Announcement
 *
 * @copyright (C) 2008 - 2012 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ();

// FIXME: add pagination
?>
<div class="kblock">
	<div class="kheader">
		<h2>
			<span>
				<?php echo JText::_('COM_KUNENA_ANN_ANNOUNCEMENTS'); ?>
				<?php
				if (!empty($this->actions['add']))
					echo ' | ' . JHtml::_('kunenaforum.link', $this->actions['add'], JText::_('COM_KUNENA_ANN_ADD'), JText::_('COM_KUNENA_ANN_ADD'));
				?>
			</span>
		</h2>
	</div>
	<div class="kcontainer">
		<div class="kbody">
<table class="kannouncement">
	<tbody id="kannouncement_body">
		<tr class="ksth">
			<th class="kcol-annid"><?php echo JText::_('COM_KUNENA_ANN_ID'); ?></th>
			<th class="kcol-anndate"><?php echo JText::_('COM_KUNENA_ANN_DATE'); ?></th>
			<th class="kcol-anntitle"><?php echo JText::_('COM_KUNENA_ANN_TITLE'); ?></th>
			<?php if ($this->actions): ?>
				<th class="kcol-annpublish"><?php echo JText::_('COM_KUNENA_ANN_PUBLISH'); ?></th>
				<th class="kcol-annedit"><?php echo JText::_('COM_KUNENA_ANN_EDIT'); ?></th>
				<th class="kcol-anndelete"><?php echo JText::_('COM_KUNENA_ANN_DELETE'); ?></th>
			<?php endif; ?>
		</tr>

		<?php $this->displayItems() ?>
	</tbody>
</table>
		</div>
	</div>
</div>