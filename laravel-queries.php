$prices = DB::table("contest_pricings")
            ->join("contest_types","contest_types.id","contest_pricings.contest_types_id")
            ->join("contests","contests.contest_pricings_id","contest_pricings.id")
            ->where("contest_types.title",ContestType::GRAND)
            ->whereIn("contests.match_id",$request->Ids)
            ->select("contests.match_id","contest_pricings.prize")
            ->get();