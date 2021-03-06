<?php

/*
 * WorldEditArt
 *
 * Copyright (C) 2016 LegendsOfMCPE
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author LegendsOfMCPE
 */

namespace WorldEditArt\InternalConstants;

interface Terms{
	const COMMAND_GENERIC_SUBSTITUTING = "command.generic.substituting";
	const COMMAND_ERROR_NOT_FOUND = "command.error.notFound";
	const COMMAND_ERROR_USER_LOADING = "command.error.userLoading";
	const COMMAND_ERROR_NO_PERM = "command.error.noPerm";
	const COMMAND_ERROR_NO_SEL = "command.error.noSel";
	const COMMAND_ERROR_OUT_OF_RANGE = "command.error.outOfRange.both";
	const COMMAND_ERROR_OUT_OF_RANGE_TOO_HIGH = "command.error.outOfRange.tooHigh";
	const COMMAND_ERROR_OUT_OF_RANGE_TOO_LOW = "command.error.outOfRange.tooLow";
	const COMMAND_ERROR_UNKNOWN_BLOCK = "command.error.unknownBlock";
	const COMMAND_ERROR_USAGE = "command.error.usage";
	const COMMAND_ERROR_CENTER_FIRST = "command.error.centerFirst";

	const COMMAND_HELP_DESCRIPTION = "command.help.description";
	const COMMAND_HELP_USAGE = "command.help.usage";

	const COMMAND_HELP_INDIVIDUAL = "command.help.individual";
	const COMMAND_HELP_PAGE_HEADER = "command.help.pageHeader";
	const COMMAND_HELP_PAGE_ENTRY = "command.help.pageEntry";

	const COMMAND_POS_DESCRIPTION_FORMULA = "command.pos.description.formula";
	const COMMAND_POS_USAGE = "command.pos.usage";
	const COMMAND_POS_DISPLACED = "command.pos.displaced";
	const COMMAND_POS_SUCCESS = "command.pos.success";

	const COMMAND_DESEL_DESCRIPTION = "command.desel.description";
	const COMMAND_DESEL_USAGE = "command.desel.usage";
	const COMMAND_DESEL_SUCCESS = "command.desel.success";
//	const COMMAND_DESEL_FAILURE = "command.desel.failure";

	const COMMAND_SET_DESCRIPTION = "command.set.description";
	const COMMAND_SET_USAGE = "command.set.usage";
	const COMMAND_SET_DETAILED_USAGE = "command.set.detailedUsage";
	const COMMAND_SET_PENDING = "command.set.pending";

	const COMMAND_SPHERE_DESCRIPTION = "command.sphere.description";
	const COMMAND_SPHERE_USAGE = "command.sphere.usage";
	const COMMAND_SPHERE_SUCCESS = "command.sphere.success";

	const SPACES_CUBOID = "spaces.cuboid";
	const SPACES_SPHERE = "spaces.sphere";
	const SPACES_CYLINDER = "spaces.cylinder";

	const INFO_ZONE_ENTRY = "info.zone.entry";
	const INFO_ZONE_ENTRY_DENIED = "info.zone.entryDenied";
	const INFO_ZONE_LEFT = "info.zone.left";

	const PHRASE_UNKNOWN = "phrasea.unknown";
	const PHRASE_UNDEFINED = "phrases.undefined";
	const PHRASE_SPACE_TYPE_CUBOID = "phrases.spaces.type.cuboid";
	const PHRASE_SPACE_TYPE_CYLINDER_GENERIC = "phrases.spaces.type.cylinder.generic";
	const PHRASE_SPACE_TYPE_CYLINDER_RIGHT = "phrases.spaces.type.cylinder.right";
	const PHRASE_SPACE_TYPE_CYLINDER_OBLIQUE = "phrases.spaces.type.cylinder.oblique";
	const PHRASE_SPACE_TYPE_CYLINDER_DISTORTED = "phrases.spaces.type.cylinder.distorted";
	const PHRASE_SPACE_TYPE_SPHERE = "phrases.spaces.type.sphere";
	const PHRASE_SPACE_TYPE_ELLIPSOID = "phrases.spaces.type.ellipsoid";
	const PHRASE_SPACE_PROP_CENTER = "phrases.spaces.properties.center";
	const PHRASE_SPACE_PROP_POS_1 = "phrases.spaces.properties.pos1";
	const PHRASE_SPACE_PROP_POS_2 = "phrases.spaces.properties.pos2";
	const PHRASE_SPACE_PROP_RADIUS = "phrases.spaces.properties.radius";
	const PHRASE_SPACE_PROP_HEIGHT = "phrases.spaces.properties.height";

	const FORMATS_VECTOR_3 = "formats.vector3";
	const FORMATS_POS = "formats.pos";
}
