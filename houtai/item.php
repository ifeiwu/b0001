<?php
//Copyright (c) 2016 iFeiwu.com
 class Item extends Ifeiwu { public function __construct() { goto zoAtr; G9gsm: parent::__construct(); goto PN8yb; p1hKf: C1cxt: goto G9gsm; zoAtr: if ($this->table) { goto C1cxt; } goto GsCBL; GsCBL: $this->table = "\x69\x74\145\155"; goto p1hKf; PN8yb: } protected function postPage($request_data) { goto pZHal; Pngyd: $data = array("\154\151\x73\164" => $list, "\x74\x6f\164\x61\154" => $total, "\160\x65\x72\160\x61\147\x65" => $perpage, "\160\x61\147\x65" => $page); goto zk_58; zk_58: j6DOh: goto kBih5; pZHal: $this->_callback("\x63\141\x6c\154\x62\x61\143\x6b\x50\141\147\x65\x42\145\x66\x6f\162\x65", array(&$request_data)); goto cUv9q; zS21N: goto j6DOh; goto W7CNs; PhU36: $order = $request_data["\x6f\162\x64\145\x72"] ?: $this->order; goto mPMtj; kBih5: $this->_callback("\143\141\x6c\x6c\x62\141\x63\x6b\120\141\147\145\x41\146\x74\145\162", array(&$data)); goto CePYt; DIybx: if ($perpage > 0) { goto gcMqV; } goto kyb5n; mPMtj: $perpage = $request_data["\x70\x65\x72\160\x61\147\x65"] ?: 0; goto DIybx; W7CNs: gcMqV: goto gAiMn; gAiMn: $page = $request_data["\160\141\x67\x65"] ?: 1; goto lQkyF; cMb0E: $list = $this->db->select($this->table, $column)->where($where)->order($order)->limit(array($page * $perpage, $perpage))->all(); goto Pngyd; CePYt: return $this->success($data); goto CzsF0; cUv9q: $column = $request_data["\x63\157\x6c\165\x6d\x6e"] ?: "\52"; goto mdd69; lQkyF: $page = $page ? $page - 1 : 0; goto IvsTT; IvsTT: $total = $this->db->select($this->table)->where($where)->count(); goto cMb0E; mdd69: $where = $request_data["\167\150\145\x72\x65"] ?: "\x31\40\75\x20\x31"; goto PhU36; kyb5n: $data = $this->db->select($this->table, $column)->where($where)->order($order)->all(); goto zS21N; CzsF0: } protected function postQuery($request_data) { goto xNreO; fXbfp: return $this->db->query($sql, $request_data["\x76\141\154\x75\x65\163"])->all(); goto UMv46; kODRb: KEtzB: goto fXbfp; xNreO: $sql = $request_data["\x73\161\x6c"]; goto ETKI9; b3SkI: $sql = str_replace("\44\164\141\x62\x6c\145", $this->prefix . $this->table, $sql); goto kODRb; ETKI9: if (!(stripos($sql, "\44\x74\x61\x62\x6c\x65") !== false)) { goto KEtzB; } goto b3SkI; UMv46: } protected function getOne($id, $column = null) { goto bmYCi; bmYCi: $column = $column ?: "\52"; goto OO9fW; OO9fW: $data = $this->db->select($this->table, $column)->where(array("\x69\x64", "\x3d", $id))->get(); goto Ae6EA; Ae6EA: return $this->success($data); goto k3AlA; k3AlA: } protected function postAdd($request_data) { goto VcC3k; gsUOn: $upload_path = $request_data["\x24\165\x70\x6c\x6f\141\x64\137\x70\141\x74\x68"]; goto bSraa; oeHmT: if ($this->db->update($this->table, $udata, array("\x69\144", "\x3d", $id))->is()) { goto hNdfW; } goto WBIcz; HktFm: $upload_path = $this->_bulidUploadPath($upload_path, $data); goto qtrq6; bSraa: if (!($upload_name && $upload_path)) { goto hImfc; } goto EYrmr; D6dUS: $this->db->beginTransaction(); goto Fa9zh; F4E6w: hImfc: goto oeHmT; VcC3k: $this->_callback("\143\x61\154\154\x62\141\x63\153\101\144\144\x42\x65\x66\157\x72\x65", array(&$request_data)); goto eJctz; SJzbP: goto iS0Mj; goto PzQVX; w9st6: return $this->error("\346\267\xbb\345\x8a\xa0\xe6\225\xb0\346\x8d\xae\xe5\xa4\261\xe8\xb4\xa5\xef\xbc\201"); goto CiXSS; AeGBT: $this->_callback("\143\141\x6c\154\x62\x61\143\153\101\144\x64\101\x66\164\145\x72", array($id, &$request_data)); goto I9SLV; BAdZT: $upload_name = $request_data["\x24\x75\160\x6c\x6f\141\144\x5f\156\141\x6d\x65"]; goto gsUOn; e1qdb: $udata = array("\x69\144" => $id); goto w8I8_; eJctz: $this->_removeFiles2($request_data["\x5f\x72\x65\155\x6f\x76\x65\x66\x69\154\145\x73"]); goto YNSBV; EYrmr: $data["\x69\x64"] = $id; goto HktFm; CiXSS: TFvYR: goto e1qdb; YNSBV: $data = $this->_bulidData($request_data); goto qJJlK; d3HD6: $this->db->commit(); goto KjVcY; Wf79u: $udata["\154\x65\x76\x65\x6c"] = $this->_getLevel($pid, $id); goto nwZKj; PzQVX: hNdfW: goto AeGBT; XcoBy: iS0Mj: goto S3n5o; Fa9zh: $id = $this->db->insert($this->table, $data)->id(); goto ng1r4; I9SLV: $this->_log("\141\144\144", array("\164\151\164\154\145" => $data["\x74\151\164\154\x65"], "\164\x61\142\154\145\137\151\x64" => $id)); goto d3HD6; ng1r4: if ($id) { goto TFvYR; } goto w9st6; P2vAA: return $this->error("\346\xb7\273\345\212\xa0\xe6\225\260\346\215\xae\345\244\261\xe8\xb4\xa5\xef\274\x81"); goto SJzbP; nEaYK: if (!($pid > 0 && in_array("\x6c\x65\166\x65\154", $this->fields))) { goto S8zRl; } goto Wf79u; qJJlK: $data["\x63\164\x69\x6d\x65"] = time(); goto D6dUS; WBIcz: $this->db->rollBack(); goto P2vAA; KjVcY: return $this->success("\346\xb7\xbb\xe5\x8a\xa0\346\225\xb0\346\x8d\xae\346\x88\x90\345\212\x9f\357\xbc\201", array("\x69\144" => $id, "\x69\x6d\x61\147\x65\137\x70\141\164\x68" => $upload_path)); goto XcoBy; nwZKj: S8zRl: goto BAdZT; qtrq6: $udata[$upload_name] = $upload_path; goto F4E6w; w8I8_: $pid = $data["\x70\x69\x64"]; goto nEaYK; S3n5o: } protected function postUpdate($id, $request_data) { goto PoC1w; q0bEJ: $this->_removeFiles2($request_data["\137\162\x65\x6d\157\x76\x65\146\x69\154\145\x73"]); goto uXIKD; b4MZo: $upload_path = $this->_bulidUploadPath($upload_path, $data); goto WeppR; WeppR: if (!in_array($upload_name, $this->fields)) { goto oOdFo; } goto OQMe5; RDxHP: $data["\x75\164\151\155\x65"] = time(); goto glWYd; WzXJL: $upload_path = $request_data["\44\x75\x70\154\x6f\x61\144\137\x70\x61\x74\150"]; goto GyY2l; PoC1w: $this->_callback("\x63\141\154\x6c\x62\141\143\153\125\x70\x64\141\164\x65\x42\145\x66\x6f\x72\x65", array(&$request_data)); goto q0bEJ; glWYd: $pid = $data["\x70\151\x64"]; goto yv1dY; njBEE: $this->_callback("\x63\141\154\154\142\x61\x63\x6b\125\x70\x64\x61\x74\x65\x41\146\164\x65\x72", array($id, &$request_data)); goto IpFgj; uXIKD: $data = $this->_bulidData($request_data); goto RDxHP; bMaBK: oOdFo: goto ND2MW; ySHVh: BfFqc: goto Irlfy; uILJd: return $this->error("\xe4\xbf\235\345\xad\x98\xe5\244\xb1\350\264\245\357\xbc\201"); goto N17gk; ND2MW: H62_W: goto v22lq; N17gk: goto BfFqc; goto HBM2f; kvBo4: $data["\154\145\166\x65\x6c"] = $this->_getLevel($pid, $id); goto PJDC_; PJDC_: dPE0O: goto clM5E; v22lq: if ($this->db->update($this->table, $data, array("\151\x64", "\75", $id))->is()) { goto HGWu4; } goto uILJd; clM5E: $upload_name = $request_data["\x24\x75\x70\x6c\157\x61\x64\137\x6e\141\x6d\x65"]; goto WzXJL; OQMe5: $data[$upload_name] = $upload_path; goto bMaBK; GyY2l: if (!($upload_name && $upload_path)) { goto H62_W; } goto b4MZo; yv1dY: if (!($pid > 0 && in_array("\x6c\145\166\x65\154", $this->fields))) { goto dPE0O; } goto kvBo4; IpFgj: $this->_log("\x75\160\x64\141\164\x65", array("\x74\151\164\154\145" => $data["\x74\x69\164\154\145"])); goto xb0_Q; xb0_Q: return $this->success("\345\267\xb2\xe4\xbf\x9d\xe5\255\230\xe6\x9b\264\346\x94\xb9\357\274\x81"); goto ySHVh; HBM2f: HGWu4: goto njBEE; Irlfy: } protected function postField($request_data) { goto Fmim2; yHhu8: if ($this->db->update($this->table, array($name => $value), array("\x69\144", "\x49\x4e", $ids))->is()) { goto iScpt; } goto jV5Ud; QEhuX: k_uXc: goto XDEzE; Fmim2: $ids = $request_data["\151\144"]; goto bINCG; RQpQg: return $this->success(); goto QEhuX; lirnD: $value = $request_data["\166\x61\154\165\x65"]; goto yHhu8; bINCG: $name = $request_data["\x6e\141\155\145"]; goto lirnD; ggd2f: iScpt: goto RQpQg; XJaWi: goto k_uXc; goto ggd2f; jV5Ud: return $this->error(); goto XJaWi; XDEzE: } protected function postCount($request_data) { goto tPWod; IY00r: $where = $request_data["\x77\150\145\x72\x65"] ?: "\61\40\x3d\x20\61"; goto s33Cp; s33Cp: return $this->db->select($table)->where($where)->count(); goto DMYtN; tPWod: $table = $request_data["\164\141\x62\154\x65"] ?: $this->table; goto IY00r; DMYtN: } protected function postDelete($request_data) { goto C1kTM; JMh1p: $this->db->beginTransaction(); goto BPonh; bUxZg: return $this->error("\346\x9c\211\x20" . count($error) . "\346\x9d\xa1\xe6\225\260\346\215\xae\xe5\x88\xa0\351\231\xa4\345\244\xb1\xe8\264\245\xef\274\201"); goto a10T6; cf7j1: $this->db->rollBack(); goto bUxZg; BPonh: foreach ($ids as $id) { goto yNQPE; Bwz9F: goto dF8vg; goto I0HYD; bx5OV: $this->_trash($item, $request_data); goto XT2PX; XT2PX: dF8vg: goto y4Xz0; Ihhxx: goto ctFXv; goto Bwz9F; yNQPE: $item = $this->db->select($this->table)->where(array("\151\144", "\x3d", $id))->get(); goto ZwkD4; I0HYD: yZlxl: goto bx5OV; y4Xz0: ctFXv: goto mrYfu; ZwkD4: if ($this->db->delete($this->table, array("\x69\x64", "\75", $id))->is()) { goto yZlxl; } goto dMs04; dMs04: $error[] = $id; goto Ihhxx; mrYfu: } goto PTUK3; nWYNu: $this->_log("\162\x65\155\x6f\166\x65", array("\164\151\164\x6c\145" => count($ids))); goto N4yod; IwKDr: if (count($error) === 0) { goto uxg9M; } goto cf7j1; N4yod: return $this->success(); goto jeYyX; cFhKW: $this->_callback("\143\141\154\154\142\141\x63\x6b\x44\145\154\145\x74\x65\x41\146\x74\x65\162", array(&$request_data)); goto Eot9V; PTUK3: wIQce: goto IwKDr; C1kTM: $this->_callback("\143\141\x6c\154\x62\141\143\153\x44\x65\x6c\145\x74\145\x42\145\x66\157\162\145", array(&$request_data)); goto qFeOv; qFeOv: $error = array(); goto M6gor; Eot9V: $this->db->commit(); goto nWYNu; v4yZS: uxg9M: goto cFhKW; a10T6: goto ppPVB; goto v4yZS; jeYyX: ppPVB: goto ZENJQ; M6gor: $ids = $request_data["\151\x64"]; goto JMh1p; ZENJQ: } }
